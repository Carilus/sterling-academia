@extends('layouts.app')
@section('title',$topic->name)
@section('content')
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<style>
    @media(max-width:767px){
        #toppaglinks nav{
            overflow-x:scroll;
        }
    }
    
    .modal {
      display: none;
      position: absolute;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto ;
      background-color: rgba(0, 0, 0, 0.5);
    }
    
    .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
    
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    .content-modal
    {
        max-width: 900px;
        margin:auto;
    }
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
</style>
@php
    $qsns = $topic->questions()->paginate(1);
    $qsns2 =  $topic->questions()->simplePaginate(1);
@endphp

<div class="row" id="toppaglinks">
    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        {{ $qsns->links() }}
    </div>
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        @php
            $scores = App\Http\Controllers\ClientController::currentScore($attempt->id,$topic->id);
            $score = $scores['score'];
            $attempted = $scores['attempted'];
            $percent = round((($score / $attempt->total_questions) * 100), 0);
        @endphp
        <span>Your score  {{ $percent }}%, questions attempted {{$attempted}}, {{ $attempt->total_questions - $attempted }} remaining)</span>
        
        <div class="progress">
            @if($percent < 50)
            <div class="bg-danger progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="1" aria-valuemax="100" style="width: {{ $percent }}%">{{ $percent }}%</div>
            @elseif($percent > 50 && $percent < 81)
            <div class="bg-primary progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="1" aria-valuemax="100" style="width: {{ $percent }}%">{{ $percent }}%</div>
            @else
            <div class="bg-success progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $percent }}" aria-valuemin="1" aria-valuemax="100" style="width: {{ $percent }}%">{{ $percent }}%</div>
            @endif
        </div>
    </div>
</div>

@foreach($qsns as $question)

    <div class="card">
        <div class="card-header">
            <div style="display:flex;justify-content:space-between">
                <h4 class="h3 fw-bold mb-0">Question @isset($_GET['page']) {{ $_GET['page'] }} @else 1 @endisset</h4>
                <button id="reportIssueBtn" type="button" class="mt-0 badge p-2 h5 border-0 bg-danger mb-4 btn-lg">Report an Issue</button>
            </div>        </div>
        <div class="card-body">
            <div class="card-text">
                {!! str_replace('&nbsp;', '', $question->question) !!}
                <!--{{  $question->id }}-->
            </div>
            
            @php
                $answers = App\Models\Answer::where('question_id', $question->id)->first();
                $choices = json_decode(json_encode($answers->choices), true);
                
            @endphp
            
            @foreach($choices as $key => $choice)
            @php
                $checkedChoice = "";
                
                if($attempt->id != null)
                {
                    $checkedChoice = App\Models\Result::where(['question_id'=> $question->id, 'attempt_id' => $attempt->id])->first();
                }
            @endphp

            <label class="d-block mb-2 fs-3" for="choices{{$key}}">
                @if($checkedChoice != null)
                    @if($checkedChoice->choice == $key)
                    <input checked type="radio" name="choices" value="{{$key}}" data-qsn="{{ $question->id }}" class="form-check-input radioBtn" id="choices{{$key}}" />
                    <span class="fw-bold">{{ $key }}.</span> {{$choice}}
                    @else
                    <input type="radio" name="choices" value="{{$key}}" data-qsn="{{ $question->id }}" class="form-check-input radioBtn" id="choices{{$key}}" />
                    <span class="fw-bold">{{ $key }}.</span> {{$choice}}
                    @endif
                @else
                    <input type="radio" name="choices" value="{{$key}}" data-qsn="{{ $question->id }}" class="form-check-input radioBtn" id="choices{{$key}}" />
                    <span class="fw-bold">{{ $key }}.</span> {{$choice}}
                @endif
            </label>
            @endforeach
            <input type="hidden" name="nxt" id="nxt" />
        </div>
        <div class="card-footer">
            <button type="button" data-bs-toggle="collapse" data-bs-target=".collapse{{ $question->id }}" class="btn btn-primary mb-4 btn-lg" id="showAnswer">Show Correct Answer</button>
            <div class="collapse collapse{{ $question->id }}" id="answercontainer">
                <h3 class="text-primary">Correct Answer is {{ $answers->correct_choice }}</h3>
            @if(!empty($answers->explanation))
                <h4 class="h3 fw-bold">Explanation</h4>
                
                <div class="card-text">
                    {!! str_replace('&nbsp;', '', $answers->explanation) !!}
                </div>
            @else
                <p>No explanation</p>
            @endif
            </div>
            <a data-bs-toggle="collapse" href=".collapse{{ $question->id }}" id="hideAnswer" style="display:none;">
                <u><span class="h4">Hide Answer</span></u>
            </a>
        </div>
    </div>
@endforeach


<div id="pagination">
   {{ $qsns2->links() }}
</div>
<div  id="myModal" class="modal" >
    <div class="content-modal" >
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2 class="text-center">Report an Issue on Question @isset($_GET['page']) {{ $_GET['page'] }} @else 1 @endisset</h2>
          <div class="form">
              <label class="form-label">Incident</label>
              <textarea class="form-control" id="incident" >
              </textarea>
              <p id="incident-text-area" class="text-danger">This filled cannot be empty</p>
              <div class="col-md-2 col-lg-2 mt-5" id="loader" style="display:none">Processing...</div>
              <div class="mt-5" id="responseMsg" style="color: rgb(127, 211, 0);color: #319795;display:none;">Incident Successfully Submitted</div>
              <div style="display:flex;justify-content:space-between">
                  <button onClick="submitIncident()" type="button" class="mt-5 btn btn-success mb-4 btn-lg" id="showAnswer">Submit</button>
                  <button type="button" id="closeModalBtn" class="mt-5 btn btn-danger mb-4 btn-lg" id="showAnswer">Cancel</button>
               </div>
          </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        
        $('#pagination .pagination').removeClass('pagination').addClass('overflow-hidden list-unstyled');
        
        $('#pagination li:first-child').removeClass('page-item').addClass('float-start');
        
        $('#pagination li:last-child').removeClass('page-item').addClass('float-end');
        
        $('#pagination li a').removeClass('page-link').addClass('btn btn-info');
        
        $('#nxt').val($('#pagination li:last-child a').attr('href'));
        
        $('#showAnswer').click(function(){
            $(this).hide();
            $('#hideAnswer').show();
        })
        
        $('#hideAnswer').click(function(){
            $(this).hide();
            $('#showAnswer').show();
        })
        
        //click of next button
        $('#pagination li:last-child a').click(function(){
            
            if($('.radioBtn').is(':checked'))
            {
                let checkedChoice = $('input[name="choices"]:checked').val();
                let qsn = $('input[name="choices"]:checked').attr('data-qsn');
                //console.log(checkedChoice, qsn);
                $.ajax({
                    type: "get",
                    url: "<?php echo route('store-answers');?>",
                    data: {
                        checkedChoice:checkedChoice,
                        qsn:qsn,
                        attempt: <?php echo $attempt->id?>,
                        lastPage: <?php if (isset($_GET['page'])) { echo $_GET['page']; } else { echo '1'; }?>
                    }
                });
            }
        });
        
        $('#pagination li:last-child.disabled span').text('Finish');
        $('#pagination li:last-child.disabled').click(function() {
            if($('.radioBtn').is(':checked'))
            {
                let checkedChoice = $('input[name="choices"]:checked').val();
                let qsn = $('input[name="choices"]:checked').attr('data-qsn');
                //console.log(checkedChoice, qsn);
                $.ajax({
                    type: "get",
                    url: "<?php echo route('store-answers');?>",
                    data: {
                        checkedChoice:checkedChoice,
                        qsn:qsn,
                        attempt: <?php echo $attempt->id?>,
                        lastPage: <?php if (isset($_GET['page'])) { echo $_GET['page']; } else { echo '1'; }?>
                    }
                });
            }

            window.location.href = "<?php echo route('calculate-score',$attempt->id);?>";
        })
        $('#pagination li:last-child.disabled').removeClass('disabled').addClass('btn btn-success');

    })
</script>

<script>
    document.addEventListener('turbo:before-fetch-request', function(event) {
      // Display an alert message to the user
      alert('Are you sure you want to leave this page?');
    
      // Send some data to a route before navigating to the next page
      fetch('/some-route', {
        method: 'POST',
        body: JSON.stringify({ data: 'some data' }),
        headers: {
          'Content-Type': 'application/json'
        }
      });
    });

</script>
<script>
   // Get the modal element
    var modal = document.getElementById('myModal');
    
    // Get the button that opens the modal
    var btn = document.getElementById('reportIssueBtn');
    var closeBtn= document.getElementById('closeModalBtn');
    
    var responseMsg = document.getElementById('responseMsg');
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName('close')[0];
     var incidentTextArea = document.getElementById('incident-text-area');
    
    // Get the modal content container
    var modalContent = document.getElementById('modalContent');
    
    // When the user clicks the button, open the modal and load the content
    btn.addEventListener('click', function() {
      modal.style.display = 'block';
      responseMsg.style.display = 'none';
      incidentTextArea.style.display = "none";
      
    });
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
      modalContent.innerHTML = ''; // Clear the modal content
    });
    // When the user clicks on <span> (x), close the modal
    span.addEventListener('click', function() {
      modal.style.display = 'none';
      modalContent.innerHTML = ''; // Clear the modal content
    });
    
    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
        modalContent.innerHTML = ''; // Clear the modal content
      }
    });
    
    function submitIncident(){
        var incident = document.getElementById('incident').value;
        var incidentTextArea = document.getElementById('incident-text-area');
        
            if(incident.trim() == "undefined" || incident.trim().length < 5){
                incidentTextArea.style.display = "block";
            }else{
               incidentTextArea.style.display = "none";
               $.ajax({
                type:'get',
                url: "{{route('lodgeIncident')}}",
                data:{
                    'incident':incident,
                    'question_id':<?php echo $question->id ?>
                },
                beforeSend: function(){
                    $('#loader').show();
                },
                success:function(data){
                    console.log(data);
                    if(data.message =="True")
                    {
                        responseMsg.style.display = 'block';
                        setTimeout(function() {
                            modal.style.display = 'none';
                        }, 4000);
                    }
                        $('#loader').hide();
                    }
                });
            }
            

        }
</script>

@endsection








