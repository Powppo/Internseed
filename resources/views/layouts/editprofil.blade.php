@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<script src="public/js/option.js"></script>
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/editprofil.css" type="text/css">
@section('content')
<div class="profil">
    <div class="content">
        <div class="right-image">
            <img src="images/profil.png" class="img-fluid" style="width: 80%;" />
        </div>

            <div class="left-image">
            <div class="text-img">           
                 <img src="images/profil2.png" class="img-fluid" style="width: 12%;" />
                
                <h3>{{ old('name', auth()->user() ? auth()->user()->name : '') }}</h3>
                </div>
            <div class="button-container">
                <a class="buttonKeluar" href="{{ route('profil') }}">
                    Edit Profil
                </a>
            </div>
        </div>
        
        <div class="text-post">
            <a class="buttonPostBaru" href="{{ route('home') }}">
                Buat Postingan Terbaru Anda
            </a>
        </div>

        <div>
            <br> <br> <br>
        </div>
    
    </div>
        
        <ul class="list-unstyled">
    @foreach($discussions as $discussion)
    @if(auth()->check() && $discussion->user_id == auth()->user()->id)
    <li style="margin: 0px 10px 15px 0px; width: 800px" >
        <a class="discussion_list card" href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/{{ $discussion->category->slug }}/{{ $discussion->slug }}">
            <div class="card-body">
                <div class="chatter_avatar" style="display: flex; align-items: center">
                    @if(Config::get('chatter.user.avatar_image_database_field'))
                        <?php $dbField = Config::get('chatter.user.avatar_image_database_field'); ?>
                        @if(str_starts_with($discussion->user->{$dbField}, ['http://', 'https://']))
                            <img src="{{ $discussion->user->{$dbField} }}">
                        @else
                            <img src="{{ Config::get('chatter.user.relative_url_to_image_assets') . $discussion->user->{$dbField} }}">
                        @endif
                    @else
                        <span class="chatter_avatar_circle" style="background-color:#x{{ \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($discussion->user->email) }}" >
                            {{ strtoupper(substr($discussion->user->email, 0, 1)) }}
                        </span>
                    @endif
                    <h4 class="p-name" style="padding: 10px 0px 0px 10px; color:#000000;">
                        <span style="display: flex; font-family: 'Poppins', sans-serif; align-items: center;" data-href="/user">
                            <p style="margin-top: 10px">@</p>{{ ucfirst($discussion->user->{Config::get('chatter.user.database_field_with_user_name')}) }}
                        </span>
                    </h4>
                </div>

                <div class="chatter_middle" style="margin-top: 40px">
                    <span class="chatter_middle_details" style="position: absolute; right :0; bottom: 0; padding: 10px;">
                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($discussion->created_at))->diffForHumans() }}
                    </span>
                    @if($discussion->post[0]->markdown)
                        <?php $discussionBody = GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($discussion->post[0]->body); ?>
                    @else
                        <?php $discussionBody = $discussion->post[0]->body; ?>
                    @endif
                    <p style="color: #000000; font-family:'Poppins', sans-serif; font-size: 17px; margin-top: 30px;">
                        {{ substr(strip_tags($discussionBody), 0, 200) }}
                        @if(strlen(strip_tags($discussionBody)) > 200){{ '...' }}@endif
                    </p>
                </div>
                <div class="chatter_right">
                    <div class="chatter_count">
                        <img style="width: 25px; height: 25px;" src="images/iconComment.png" alt="">
                        <p style="font-size: 10px; position: absolute; bottom:10px; left: 50px; color: #000000;">
                            {{ $discussion->postsCount[0]->total }} Comment
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </li>
    @endif
    @endforeach
    <div id="pagination">
                        {{ $discussions->links('pagination::bootstrap-4') }}
                    </div>
</ul>    
    </div>
@endsection