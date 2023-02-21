@extends('subadmin.master')
@section('content')
    <section class="add-question-sec">
        <!-- New Work  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-title">
                        <div class="q ">
                            <h1 class="main-heading">Questionnaire Management</h1>
                            <ol class="breadcrumb hide">
                                <li><a href="#" class="active">Pre-Inspection Photos</a></li>
                                <li><a href="#"> Front Elevation </a></li>
                            </ol>
                        </div>
                        <div class="buttons">
                            <a href="{{ URL::to('subadmin/questionnaire/add') }}" class="btn add-btn btn-add">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <img src="{{asset('assets/images/button-icon.png')}}" alt="...">
                                    </li>
                                    <li class="ml-4">
                                        Question
                                    </li>
                                </ul>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row questionnaire-row">
                <div class="col-md-12 d-flex align-items-center ">
                    <div class="ledt-img">
                        <a href="{{URL::to('subadmin/questionnaire')}}">
                            <img src="{{asset('assets/images/left-arrow.png')}}" alt="...">
                        </a>
                    </div>
                    <div class="questionare-title">
                        <p> Edit Question</p>
                    </div>
                </div>
                <form method="POST" action="{{url('subadmin/questionnaire/update')}}" id="editQuestionForm">
                    {{csrf_field()}}
                    <div class="col-md-8">
                        <div class="add-photo">
                            <div class="title-switch">
                                <a href="" data-toggle="modal" data-target="#addHelpPhoto">Add Help Photo</a>
                                <div class="switch-btn">
                                    <span>Required</span>
                                    <button type="button" class="btn btn-sm btn-toggle" data-toggle="button"
                                            aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                    <input type="hidden" name="is_required" value="false" class="test_class"/>
                                </div>

                            </div>
                            <div class="input-text">
                                <label for="basic-url">Question</label>
                                <div class="input-group">
                                    <input type="text" name="question" class="form-control"
                                           value="{{$data['query']['query']}}"
                                           placeholder="Headline or Question">
                                </div>
                            </div>
                            <div class="input-text">
                                <label for="basic-url">Inspection Area</label>
                                <div class="input-group ">
                                    <select name="area" id="">
                                        <option disabled selected>Select Inspection Area</option>
                                        @foreach($data['categories'] AS $key => $item)

                                            <option value="{{$item['id']}}"
                                            {{$data['query']['category_id'] == $item['id'] ? "selected" : ""}}
                                            >{{$item['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="input-text photo_view " style="display: none;">
                            <label disabled>Photo View</label>
                            <div class="input-group ">
                                <select name="photo_view" id="">
                                </select>
                            </div>
                        </div>

                        {{--To be removed hide on Feb-2023--}}
                        <div class="questionnaire-management-img-area hide">
                            <div class="remove-img">
                                <img src="{{asset('assets/images/home-remove.png')}}" alt="...">
                                <p>remove</p>
                            </div>
                            <div class="remove-img">
                                <img src="{{asset('assets/images/home-remove.png')}}" alt="...">
                                <p>remove</p>
                            </div>
                            <div class="remove-img">
                                <img src="{{asset('assets/images/home-remove.png')}}" alt="...">
                                <p>remove</p>
                            </div>
                            <div class="remove-img">
                                <img src="{{asset('assets/images/home-remove.png')}}" alt="...">
                                <p>remove</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-text options" style="display: none;">
                                <label for="basic-url" class="title">Single Select</label>
                                <div class="input-group">
                                    <input type="text" name="options[]" data-index="0" class="form-control" value="N/A"
                                           placeholder="Option 1">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="options[]" data-index="1" class="form-control"
                                           placeholder="Option 2">
                                </div>
                            </div>
                            <div class="add_option" style="display: none;">
                                <a href="" class=" btn-add ft-left">Add Option</a>
                            </div>
                        </div>

                        <input type="file" style="display: none;" name="help_photo"/>

                        <div class="btn-group btn-group-toggle option_types" data-toggle="buttons">
                            <label class="btn btn-secondary {{$data['query']['type'] == "text" ? "selected" : ""}} active">
                                <input type="radio" name="type" id="option1" value="text" autocomplete="off" checked>
                                Input Field
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="type" id="option2" value="radio" autocomplete="off"> Single
                                Select
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="type" id="option3" value="checkbox" autocomplete="off"> Multi
                                Select
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="type" id="option3" value="date" autocomplete="off"> Date
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="type" id="option3" value="sign" autocomplete="off"> Sign
                            </label>
                        </div>

                        <div class="add-cancel-bnt">
                            <button type="submit" class="btn btn-save bg-modified" data-toggle="modal"
                                    data-target="#myModal">
                                <ul class="add-cancel-btn">
                                    <li class="color-0082f1">+</li>
                                    <li>Update</li>
                                </ul>
                            </button>
                            <button type="button" class="btn btn-close cancelButton">
                                <ul class="add-cancel-btn">
                                    <li>-</li>
                                    <li> Cancel</li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach($data['categories'] AS $catKey => $catItem)
                        @if($catItem['category_survey']->isNotEmpty())
                        <div class="inspection-area">
                             <h1>{{$catItem->name}}</h1>
                            {{--<p>{{$catItem->name}}</p>--}}
                        </div>
                        <div class="inspection-area-edit">
                            @foreach($catItem['category_survey'] AS $surveyKey => $surveyItem)
                                <div class="pre-inspection pre-bg-color">
                                    <div class="pre-title">
                                        <p>{{$surveyItem->query}}</p>
                                    </div>
                                    <ul class="d-flex align-items-center">
                                        <li><a href="{{$surveyItem->id}}">Edit</a></li>
                                        <li><a href="{{$surveyItem->id}}">Delete</a></li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach
                </div>
                </form>
            </div>

        </div>
        <!-- New Work  End -->
        <!-- Alert Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog add-project-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="header-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-left">Updated</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="updated-title">
                                    <p>Your inspection area question has been updated!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer footer-close-button">
                        <div class="add-cancel-bnt">
                            <button type="submit" class="btn btn-save bg-modified">
                                <ul class="add-cancel-btn">
                                    <li>×</li>
                                    <li>Close</li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alert Modal End -->
    </section>
    <div class="modal fade" id="addHelpPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog add-project-modal upload-csv-modal" role="document">
            <form id="js-upload-form" method="POST" action="{{url('subadmin/report/storeLogo')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="header-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-left">Company Logo</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="upload-drop-zone @if(!empty($report->logo_path)) hide @endif" id="drop-zone">
                                    <div class="drop-cvs" >
                                        <div class="cvs-border" >
                                            <div class="img-cvs">
                                                <img src="{{asset('assets/images/csvs-img.png')}}" alt="...">
                                            </div>
                                            <div class="cvs-import-tile text-center">
                                                <p>Drag and drop to upload your CSV file </p>
                                                <p><span>Acceptable Formats:</span>jpeg, gif, png, pdf</p>

                                                <div class="fileUpload btn-broswe blue-btn btn width100">
                                                <span><ul class="add-cancel-btn">
                                                    <li class="browse-plus">+</li>
                                                    <li>Browse</li>
                                                </ul></span>
                                                    <input name="logo" type="file" id="js-upload-files" class="uploadlogo @if(!empty($report->logo_path)) {{"hide"}} @endif"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row logo_preview">
                                     <div class="col-md-12 text-center">
                                         <img  src="" class="img-thumbnail hide" style="max-height: 300px;"/>
                                     </div>
                                 </div>--}}


                                <div class="row image_preview @if(empty($report->logo_path)) hide @endif" >
                                    @if(!empty($report->logo_path)) <input type="hidden" name="image_set" value="true" /> @endif
                                    <div class="col-md-12 text-center">
                                        <img  src="{{url("uploads/report_templates/".$report->logo_path)}}" class="img-thumbnail" style="max-height: 300px;"/>
                                    </div>
                                    <div class="col-md-12 text-center pt-3">
                                        <button type="button" class="btn btn-danger image_remove">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer footer-switch-btn">
                        <div class="switch-btn">
                        </div>
                        <div class="add-cancel-bnt">
                            <button type="button" class="btn btn-close cancelButton" data-dismiss="modal">
                                <ul class="add-cancel-btn">
                                    <li>-</li>
                                    <li> Close</li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('page_level_scripts')
    <script type="text/javascript">

        +function ($) {
            'use strict';

            // UPLOAD CLASS DEFINITION
            // ======================

            var dropZone = document.getElementById('drop-zone');
            var uploadForm = document.getElementById('editQuestionForm');
            let help_photo;

            var startUpload = function (files) {
                console.log('startUpload', files);
            }

            uploadForm.addEventListener('submit', function (e) {
                var uploadFiles = document.getElementById('js-upload-files').files;
                e.preventDefault()

                var fd = new FormData($('#editQuestionForm')[0]);

                if (typeof (help_photo) !== 'undefined') {
                    fd.append('help_photo', help_photo[0]);
                }

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: '{{URL::to('subadmin/questionnaire/store')}}',
                    data: fd,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: (data) => {
                        console.log('ajax good', $(".alert-success.success"));
                        $('#companyLogoModal').modal('toggle');
                        $("div.alert-success.success").text(data.message).show();
                        setTimeout(() => {
                            $("div.alert.alert-success.success").hide();
                        }, 2000);
                    }
                });

                startUpload(uploadFiles)
            })

            dropZone.ondrop = function (e) {
                e.preventDefault();
                this.className = 'upload-drop-zone';
                help_photo = e.dataTransfer.files;
                // startUpload(e.dataTransfer.files)

                if (FileReader && help_photo && help_photo.length) {
                    var fr = new FileReader();
                    fr.onload = function () {
                        // document.getElementById(outImage).src = fr.result;
                        $('.image_preview').find('img.img-thumbnail').attr('src', fr.result);

                        if ($('.image_preview').hasClass('hide')) {
                            $('.image_preview').removeClass('hide');
                        }

                    }
                    console.log("createObjectURL: ", URL.createObjectURL(help_photo[0]));

                    fr.readAsDataURL(help_photo[0]); // Initiating Reader that eventually trigger .onload
                    $('.upload-drop-zone').addClass('hide');
                }
            }

            dropZone.ondragover = function () {
                this.className = 'upload-drop-zone drop';
                return false;
            }

            dropZone.ondragleave = function () {
                this.className = 'upload-drop-zone';
                return false;
            }

        }(jQuery);

        $(document).ready(function () {
            console.log('ready');

            let optionTypes = ['radio', 'checkbox'];
            let type = 'text';

            $("button.image_remove").on('click', function (e) {
                console.log('clicked')

                let $imagePreview = $(this).closest('.image_preview');
                let $modalBody = $(this).closest('.modal-body');

                console.log('$imagePreview', $imagePreview);
                console.log('$modalBody', $modalBody);
                console.log('drop-zone', $modalBody.find(".upload-drop-zone").first());

                console.log('class', $(this).attr('class'));

                /** For cover image */
                if ($(this).hasClass('cover')) {
                    console.log('cover_image', $modalBody.find(".form-group.cover_image").first());
                    $modalBody.find(".form-group.cover_image").first().removeClass("hide");
                }

                $modalBody.find(".upload-drop-zone").first().removeClass("hide");
                $imagePreview.addClass("hide");
                $imagePreview.find("input[name='image_set']").first().attr("disabled", true);
            });

            $('.btn-toggle').on('click', function (e) {
                let state = $(this).closest('.modal-footer').find('input[name="is_required"]').val();
                if (state === 'true') {
                    $(this).closest('.switch-btn').find('input[name="is_required"]').val(false); // Toggling
                } else {
                    $(this).closest('.switch-btn').find('input[name="is_required"]').val(true); // Toggling
                }
            });

            $('.option_types .btn-secondary ').on('click', function () {

                type = $(this).find("input[name='type']").val();

                if (optionTypes.includes(type)) {
                    console.log('make options');
                    let area = $("select[name='area']").val();
                    if (area > 0) {
                        fillPhotoview($("select[name='area']").val());
                    } else {
                        $("div.alert-danger.error").text("Please Select Inspection Area First.").show();
                        setTimeout(() => {
                            $("div.alert-danger.error").hide();
                        }, 5000);
                        return false;
                    }
                    let title = type == 'radio' ? "Single Select" : "Multi Select";
                    let optionsHtml = `
                        <label for="basic-url" class="title">${title}</label>
                        <div class="input-group">
                            <input type="text" name="options[]" data-index="0"  value="N/A" class="form-control" placeholder="Option 1">
                        </div>
                        <div class="input-group">
                            <input type="text" name="options[]" data-index="1" class="form-control" placeholder="Option 2">
                        </div>`;

                    $(".options").html(optionsHtml).show();
                    $(".add_option").show();
                } else {
                    console.log('no options');
                    $(".options").hide();
                    $(".add_option").hide();
                    $(".photo_view").hide();
                }
            });

            $(".add_option a").on("click", function (e) {
                e.preventDefault();
                let index = $(".options").find('.form-control').last().data('index');
                let optionHtml = `<div class="input-group">
                            <input type="text" name="options[]" data-index="${index + 1}" class="form-control" placeholder="Option ${index + 2}">
                        </div>`;
                $(".options").append(optionHtml);
            });

            $("select[name='area']").on("change", function (e) {
                if (optionTypes.includes(type)) {
                    fillPhotoview($(this).val())
                }
            });

            function fillPhotoview(inspectionArea) {
                $.ajax({
                    type: "GET",
                    enctype: 'multipart/form-data',
                    url: `{{URL::to('subadmin/photo_view')}}/${inspectionArea}`,
                    data: [],
                    async: false,
                    contentType: false,
                    success: (response) => {
                        let options = `<option disabled selected>Select Photo View</option>`;
                        $.each(response.data, (i, el) => {
                            options += `<option value="${el.id}">${el.name}</option>`;
                        });
                        $("select[name='photo_view']").html(options);
                        $(".photo_view").show();
                    }
                });
            }
        });
    </script>
@endpush