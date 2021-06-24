<li>{{ $subComment->asw_content }}</li>
<p class="text-danger">
{{ ('\App\Models\QuestionsToTeacher')::where('qs_answerID',$subComment->id)->pluck('qs_content')->first() }}

</p>
@if ($subComment->categories)
    <ul>
        @if(count($comment->childAnswer))
            @foreach ($comment->childAnswer as $subComment)
                @include('pages.course_video.sub_categories', ['subComment' => $subComment])
            @endforeach
        @endif
    </ul>
@endif