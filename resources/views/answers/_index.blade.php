
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                <div class="card-title">
                    <div class="d-flex align-item-center">
                        <h3>{{ $answersCount . " " . str_plural('Answer', $answersCount) }}</h3>
                    </div>
                </div>
                    <hr>
                    @include ('layouts._messages')
                    
                    @foreach ($answers as $answer)
                     <div class="media">
                    <div class="d-fex flex-column vote-controls">
                        <a  title="This question is useful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="votes-count">1230</span>
                        <a title="This question is not useful" class="vote-down off">
                            <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a title="Mark this answer as best answer" class="vote-accepted mt-2">
                            <i class="fas fa-check fa-2x"></i>
                        </a>
                    </div>
                        <div class="media-body">
                            {!! $answer->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">Answered {{ $question->created_date }}</span>
                                <div class="media mt-2">
                                    <a href="{{ $question->user->url }}" class="pr-2">
                                    <img src="{{ $question->user->avatar }}">
                                    </a> 
                                    <div class="media-body mt-1">
                                        <a href="{{ $question->user->url }}">{{ $answer->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>