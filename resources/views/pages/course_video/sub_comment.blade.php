<div class="media">

    <img class="img_name" src="{{ pare_url_file(('\App\Models\User')::find($sub_Comment->asw_id_user)->avatar) }}">

    <div class="media-body">

        <div class="row">

            <div class="col-12">
                <h5 class="text-primary h5-name-tc">{{ ('\App\Models\User')::find($sub_Comment->asw_id_user)->name }}</h5>
                <span class="text-time">Gửi lúc: {{ date ("H:i Y-d-m", strtotime($sub_Comment->created_at)) }}</span>
            </div>
        </div>
        <p class="content-asw">
            {{ $sub_Comment->asw_content }}
        </p>
        <div class="media media-last">
            <img class="img_name" src="{{ pare_url_file(('\App\Models\Education\Teacher')::find($sub_Comment->asw_teacher)->t_avatar) }}">
            <div class="media-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-primary h5-name-tc">{{ ('\App\Models\Education\Teacher')::where('id',$sub_Comment->asw_teacher)->pluck('t_name')->first() }}</h5>
                        <span class="text-time">Gửi lúc: {{ date ("H:i Y-d-m", strtotime($sub_Comment->created_at)) }}</span>
                    </div>
                </div>
                @if (('\App\Models\QuestionsToTeacher')::where('qs_answerID',$sub_Comment->id)->pluck('qs_content')->first())
                <p class="content-asw">
                    {{ ('\App\Models\QuestionsToTeacher')::where('qs_answerID',$sub_Comment->id)->pluck('qs_content')->first() }}
                </p>
                @else
                <p class="content-asw text-danger">
                    Chờ giáo viên xác nhận.
                </p>
                @endif


                @if(count($sub_Comment->answerToTeacher) > 0)
                @foreach ($sub_Comment->answerToTeacher as $subComment)
                @include('pages.course_video.sub_comment', ['sub_Comment' => $subComment])
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>