@extends(Config::get('chatter.master_file_extend'))

@section(Config::get('chatter.yields.head'))
<link href="/vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.css" rel="stylesheet">
<link href="css/forums.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
{{-- <link href="/vendor/devdojo/chatter/assets/css/forums.css" rel="stylesheet"> --}}
<link href="/vendor/devdojo/chatter/assets/css/chatter.css" rel="stylesheet">
<link href="/vendor/devdojo/chatter/assets/css/navbar.css" rel="stylesheet">
<link href="/vendor/devdojo/chatter/assets/css/footer.css" rel="stylesheet">
@if($chatter_editor == 'simplemde')
<link href="/vendor/devdojo/chatter/assets/css/simplemde.min.css" rel="stylesheet">
@endif
@stop

@section('content')
<div id="chatter" class="chatter_home">
    @if(Session::has('chatter_alert'))
    <div class="chatter-alert alert alert-{{ Session::get('chatter_alert_type') }}">
        <div class="container">
            <strong><i class="chatter-alert-{{ Session::get('chatter_alert_type') }}"></i> {{ Config::get('chatter.alert_messages.' . Session::get('chatter_alert_type')) }}</strong>
            {{ Session::get('chatter_alert') }}
            <i class="chatter-close"></i>
        </div>
    </div>
    <div class="chatter-alert-spacer"></div>
    @endif

    @if (count($errors) > 0)
    <div class="chatter-alert alert alert-danger">
        <div class="container">
            <p><strong><i class="chatter-alert-danger"></i> {{ Config::get('chatter.alert_messages.danger') }}</strong>
                Please fix the following errors:</p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="container chatter_container">
        <div class="column">
            <div class="col-md-3 left-column">
                <!-- SIDEBAR -->
                <div class="chatter_sidebar" style="padding: 0px 0px 30px 0px;">
                    
					<button type="button" class="btnpost" id="new_discussion_btn" data-bs-toggle="modal" data-bs-target="#ModalPost" style="width: 70px; height: 70px; background-color: #FFD55A; border: none; border-radius: 70px"><i class=""></i>
						<img style="width: 40px; " src="/vendor/devdojo/chatter/assets/images/plusWhite.png" alt="">
					</button>
                    {{-- <button type="button" class="btnpost" id="new_discussion_btn" data-bs-toggle="modal" data-bs-target="#ModalPost"><i class="chatter-new"></i> POST {{ Config::get('chatter.titles.') }}</button> --}}
                   


                    {{-- <a href="/{{ Config::get('chatter.routes.home') }}"><i class="chatter-bubble"></i> All {{
                        Config::get('chatter.titles.discussions') }}
					</a>
                    <ul class="nav nav-pills nav-stacked">
                        <?php $categories = DevDojo\Chatter\Models\Models::category()->all(); ?>
                        @foreach($categories as $category)
                        <li>
							<a
                                href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.category') }}/{{ $category->slug }}">
                                <div class="chatter-box" style="background-color:{{ $category->color }}"></div> {{
                                $category->name }}
                            </a>
						</li>
                        @endforeach
                    </ul> --}}
                </div>
            </div>
            <!-- END SIDEBAR -->
            <div class="col-md-12 right-column" style="display: flex; margin: auto">
                <div class="panel">
                    <ul class="discussions" style="width: 800px">
                        {{-- New Discussion Form --}}
                        <div id="new_discussion" >
                            <div class="chatter_loader dark" id="new_discussion_loader">

                            </div>

                            <form id="chatter_form_editor"
                                action="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}"
                                method="POST">
                                <div class="row">
									<!-- TITLE -->
                                    {{-- <div class="col-md-7">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Title of {{ Config::get('chatter.titles.discussion') }}" v-model="title" value="{{ old('title') }}" >
                                    </div> --}}

                                    <!-- CATEGORY -->
                                    <div class="col-md-4">
                                        <select style=" text-align: center; background-color: #FFFFFF" id="chatter_category_id" class="form-control" name="chatter_category_id">
												<option value="">Select a Category</option>
												@foreach($categories as $category)
													@if(old('chatter_category_id') == $category->id)
														<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
													@else
														<option value="{{ $category->id }}">{{ $category->name }}</option>
													@endif
												@endforeach
											</select>
                                    </div>

                                    <div class="col-md-1">
                                        <i class="chatter-close"></i>
                                    </div>
                                </div><!-- .row -->

                                <!-- BODY -->
                                <div id="editor">
                                    @if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
                                    <label id="tinymce_placeholder">	
       Bagikan Pemikiran Anda, atau Mintalah Saran dari Profesional Lain.</label>
									<textarea id="body" class="richText" name="body" placeholder="">{{ old('body') }}</textarea>
                                    @elseif($chatter_editor == 'simplemde')
                                    <textarea id="simplemde" name="body" placeholder="">{{ old('body') }}</textarea>
                                    @endif
                                </div>

                                <input type="hidden" name="_token" id="csrf_token_field" value="{{ csrf_token() }}">

                                <div id="new_discussion_footer">
                                    {{--
                                    <input type='text' id="color" name="color" /><span class="select_color_text">Select a Color for this Discussion (optional)</span>
                                    --}}
									<button class="btnpost pull-right" id="submit_discussion"><i class="chatter-new"></i> Create {{ Config::get('chatter.titles.discussion') }}</button>
                                    <a href="/{{ Config::get('chatter.routes.home') }}"
                                        class="btn btn-default pull-right" id="cancel_discussion"></a>
                                    <div style="clear:both"></div>
                                </div>
                            </form>
                        </div>
                        @foreach($discussions as $discussion)
                        <li style="margin: 0px 10px 15px 0px">
                            <a class="discussion_list"
                                href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/{{ $discussion->category->slug }}/{{ $discussion->slug }}">
                                <div class="chatter_avatar" style="display: flex; align-items: center">
                                    @if(Config::get('chatter.user.avatar_image_database_field'))

                                    <?php $db_field = Config::get('chatter.user.avatar_image_database_field'); ?>

                                    <!-- If the user db field contains http:// or https:// we don't need to use the relative path to the image assets -->
                                    @if( (substr($discussion->user->{$db_field}, 0, 7) == 'http://') ||
                                    (substr($discussion->user->{$db_field}, 0, 8) == 'https://') )
                                    <img src="{{ $discussion->user->{$db_field}  }}">
                                            @else
                                    <img src="{{ Config::get('chatter.user.relative_url_to_image_assets') . $discussion->user->{$db_field}  }}">
                                            @endif

                                        @else
                                    <span class="chatter_avatar_circle" style="background-color:#x<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($discussion->user->email) ?>">
                                                {{ strtoupper(substr($discussion->user->email, 0, 1)) }}
                                            </span>
                                    @endif
                                    <h4 class="p-name" style="padding: 10px 0px 0px 10px; color:#000000;">
                                        <span style="display: flex; font-family: 'Poppins', sans-serif; align-items: center;" data-href="/user"><p style="margin-top: 10px">@</p>{{ ucfirst($discussion->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</span>
                                    </h4>
                                </div>

                                <div class="chatter_middle" style="margin-top: 40px">
                                    {{--<h3 class="chatter_middle_title">{{ $discussion->title }} <div
                                            class="chatter_cat"
                                            style="background-color:{{ $discussion->category->color }}">{{
                                            $discussion->category->name }}</div>
                                    </h3>--}}
                                    <span class="chatter_middle_details" style="position: absolute; right :0; bottom: 0; padding: 10px;">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($discussion->created_at))->diffForHumans() }}</span>
                                    @if($discussion->post[0]->markdown)
                                    <?php $discussion_body = GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $discussion->post[0]->body ); ?>
                                    @else
                                    <?php $discussion_body = $discussion->post[0]->body; ?>
                                    @endif
                                    <p style="color: #000000; font-family:'Poppins', sans-serif; font-size: 17px; margin-top: 30px;">{{
                                        substr(strip_tags($discussion_body), 0, 200)
                                        }}@if(strlen(strip_tags($discussion_body)) > 200){{ '...' }}@endif</p>
                                </div>

                                <div class="chatter_right">
                                    <div class="chatter_count"><img style="width: 25px; height: 25px;" src="images/iconComment.png" alt="">
                                        <p
                                            style="font-size: 10px; position: absolute; bottom:10px; left: 50px; color: #000000;">
                                            {{ $discussion->postsCount[0]->total }} Comment</p>
                                    </div>
                                </div>

                                <div class="chatter_clear"></div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div id="pagination">
                        {{ $discussions->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <div class="small-card" style="font-family: poppins; height: 100%; border: 1px solid #000000; background-color: #FFFFFF;">
                    <h4 style="font-weight: bolder;">Daftar Topik</h4>
                    <p class="yellow-paragraph">
						<a style="color: #000000; text-decoration: none; padding-right: 10px" href="/{{ Config::get('chatter.routes.home') }}"><i></i> All {{
							Config::get('chatter.titles.discussions') }}
						</a> 
						<i class="gg-arrow-right"></i>
                    </p>
                    <!-- Card di dalam card rekomendasi -->
					<div style="position: absolute; display: flex; flex-direction: column; gap: 100px; top: 15%">
						<div style="border: 1px solid #000000; display : flex; align-items: center; border-radius: 50px; padding: 18px; width: 80px;">
							<img src="images/selfPromote.png" alt="User Image" style="width: 40px; height: 40px">
						</div>
						<div style="border: 1px solid #000000; display : flex; align-items: center; border-radius: 50px; padding: 18px; width: 80px">
							<img src="images/information.png" alt="User Image" style="width: 40px; height: 40px">
						</div>
						<div style="border: 1px solid #000000; display : flex; align-items: center; border-radius: 50px; padding: 18px; width: 80px">
							<img src="images/experience.png" alt="User Image" style="width: 40px; height: 40px">
						</div>
						<div style="border: 1px solid #000000; display : flex; align-items: center; border-radius: 50px; padding: 18px; width: 80px">
							<img src="images/random.png" alt="User Image" style="width: 40px; height: 40px">
						</div>
					</div>
                    <ul class="nav nav-pills nav-stacked" style="display: flex; flex-direction: column;">
                        <?php $categories = DevDojo\Chatter\Models\Models::category()->all(); ?>
                        @foreach($categories as $category)
						<div style="display: flex; background-color: #000000">
							
						</div>
                        <li style="display: flex; list-style: none; border-top: 1.5px solid #000000; padding-top: 20px; margin-top: 30px;">
							<li>
								
							</li>
							<ul style="list-style: none;">
								<li style="font-size: 20px; padding-left: 70px;">
									{{$category->name }}
								</li>
								<li style="padding-left: 70px;">
									A community for Consulting professionals across...
								</li>
							</ul>
						</li>
						<div style="margin: 20px 0px 0px 210px; display: flex; align-items: center; gap: 20px;">
							<a style="color: #000000; text-decoration: none;" href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.category') }}/{{ $category->slug }}">
								<div class="chatter-box" style="background-color:{{ $category->color }}"></div>
								Lihat
							</a>
							<button class="btnfollow" style="height: 30px; align-items: center; display: flex;" onclick="changeText(this)">
								<small>
									Ikuti
								</small>
								<script>
									function changeText(button) {
									if (button.innerText === "Ikuti") {
										button.innerText = "Diikuti";
										button.style.backgroundColor = "#FFD55A";
										button.style.border = "1px solid #FFD55A"; // Memperbaiki nilai border
										button.style.color = "#ffffff";
									} else {
										button.innerText = "Ikuti";
										button.style.backgroundColor = "#ffffff";
										button.style.border = "1px solid #000000"; // Memperbaiki nilai border
										button.style.color = "#000000";
									}
									}
						  		</script>
							</button>
						</div>
                        @endforeach
                    </ul>
                    {{-- <div class="nested-card">
                        <div class="content">
                            <img src="images/User.png" alt="User Image">
                            <div class="text-container">
                                <h5>Consulting</h5>
                                <p1>A community for Consulting professionals across...</p1>
                            </div>
                        </div>
                        <div class="button-container">
                            <a href="/lihat" , class="btnview">Lihat</a>
                            <button class="btnfollow" onclick="changeText(this)">Ikuti
								<script>
									function changeText(button) {
									if (button.innerText === "Ikuti") {
										button.innerText = "Diikuti";
										button.style.backgroundColor = "#FFD55A";
										button.style.border = "1px solid #FFD55A"; // Memperbaiki nilai border
										button.style.color = "#ffffff";
									} else {
										button.innerText = "Ikuti";
										button.style.backgroundColor = "#ffffff";
										button.style.border = "1px solid #000000"; // Memperbaiki nilai border
										button.style.color = "#000000";
									}
									}
						  		</script>
							</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- New Discussion Form--}}

<!-- #new_discussion -->
@if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
<input type="hidden" id="chatter_tinymce_toolbar" value="{{ Config::get('chatter.tinymce.toolbar') }}">
<input type="hidden" id="chatter_tinymce_plugins" value="{{ Config::get('chatter.tinymce.plugins') }}">
@endif
<input type="hidden" id="current_path" value="{{ Request::path() }}">

@endsection

@section(Config::get('chatter.yields.footer'))

@if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
<script src="/vendor/devdojo/chatter/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/tinymce.js"></script>
<script>
    var my_tinymce = tinyMCE;
        $('document').ready(function(){
            $('#tinymce_placeholder').click(function(){
                my_tinymce.activeEditor.focus();
            });
        });
</script>
@elseif($chatter_editor == 'simplemde')
<script src="/vendor/devdojo/chatter/assets/js/simplemde.min.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/chatter_simplemde.js"></script>
@endif

<script src="/vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/chatter.js"></script>
<script>
    $('document').ready(function(){

        $('.chatter-close').click(function(){
            $('#new_discussion').slideUp();
        });
        $('#new_discussion_btn, #cancel_discussion').click(function(){
            @if(Auth::guest())
                window.location.href = "/{{ Config::get('chatter.routes.home') }}/login";
            @else
                $('#new_discussion').slideDown();
                $('#title').focus();
            @endif
        });

        $("#color").spectrum({
            color: "#333639",
            preferredFormat: "hex",
            containerClassName: 'chatter-color-picker',
            cancelText: '',
            chooseText: 'close',
            move: function(color) {
                $("#color").val(color.toHexString());
            }
        });

        @if (count($errors) > 0)
            $('#new_discussion').slideDown();
            $('#title').focus();
        @endif


    });
</script>
@stop