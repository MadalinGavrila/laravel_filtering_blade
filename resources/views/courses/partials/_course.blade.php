<div class="media mb-2">
    <img class="mr-3" src="https://via.placeholder.com/64x64&text=..." alt="{{ $course->name }}">
    <div class="media-body">
       <h5 class="mt-0 mb-0">{{ $course->name }}</h5>
       <ul class="list-inline">
           <li class="list-inline-item">{{ $course->formattedAccess }}</li>
           <li class="list-inline-item">{{ $course->formattedDifficulty }}</li>
           <li class="list-inline-item">{{ $course->formattedType }}</li>
           <li class="list-inline-item">{{ $course->formattedStarted }}</li>

           @if($course->subjects->count())
               <ul class="list-inline">
                   @foreach($course->subjects as $subject)
                       <li class="list-inline-item">{{ $subject->name }}</li>
                   @endforeach
               </ul>
           @endif
       </ul>
    </div>
</div>