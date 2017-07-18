<li id="li-comment-{{$data['id']}}" class="comment even borGreen">
    <div id="comment-{{$data['id']}}" class="comment-container">
        <div class="comment-author vcard">
            <img alt="" src="{{ asset(env('THEME'))}}/images/avatar/unknow.png" class="avatar" height="75" width="75" />
            <cite class="fn">{{$data['name']}}</cite>
        </div>

        <div class="comment-meta commentmetadata">
            <div class="intro">
                <div class="commentDate">
                    <a href="#"></a>
                </div>
            </div>
            <div class="comment-body">
                <p>{{$data['text']}}</p>
            </div>
        </div>
    </div>
</li>