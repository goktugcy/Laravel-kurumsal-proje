@extends('back.layouts.master')
@section('title','Site Ayarları')
@section('content')

<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-5">
        <div class="card-header py-3 ">
            Site Ayarları
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.settings.update')}}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Adı</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-home"></i></span>
                            </div>
                            <input type="text" name="title" class="form-control" value="{{ $settings->title }}"
                                required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Aktiflik Durumu</label>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Durum</label>
                            </div>
                            <select name="active" class="form-control">
                                <option @if ($settings->active==1) selected @endif value="1" >Açık</option>
                                <option @if ($settings->active==0) selected @endif  value="0" >Kapalı</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Açıklaması (Seo)</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-google"></i></span>
                            </div>
                            <input type="text" name="description" class="form-control" value="{{ $settings->description }}"
                                required>
                              </div>
                        </div>
                    </div>
                 

                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Sahibi (Seo)</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-google"></i></span>
                            </div>
                            <input type="text" name="author" class="form-control" value="{{ $settings->author }}"
                                required>
                              </div>
                        </div>
                    </div>
                    </div>

                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Site Sloganı</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="ti-bookmark-alt"></i></span>
                            </div>
                            <input type="text" name="slogan" class="form-control" value="{{ $settings->slogan }}"
                                required>
                              </div>
                        </div>
                    </div>

                     <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                            <label>Mail adresi</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-email"></i></span>
                            </div>
                            <input type="text" name="description" class="form-control" value="{{ $settings->email }}"
                                required>
                              </div>
                        </div>
                    </div>
                 

                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefon Numarası</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-phone"></i></span>
                            </div>
                            <input type="text" name="author" class="form-control" value="{{ $settings->phone }}"
                                required>
                              </div>
                        </div>
                    </div>
                    </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Logo</label>
                            <br>
                            <img style="width:10rem;" src="{{ $settings->logo }}" class="img-thumbnail">
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="logo">
                                <label class="custom-file-label" for="inputGroupFile01">Göz At</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Site Favicon</label>
                            <br>
                            <img style="width:10rem;" src="{{ $settings->favicon }}" class="img-thumbnail">
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="favicon">
                                <label class="custom-file-label" for="inputGroupFile01">Göz At</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-facebook"></i></span>
                            </div>
                            <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook }}"
                                required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-twitter"></i></span>
                            </div>
                            <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter }}"
                                required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>İnstagram</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-instagram"></i></span>
                            </div>
                            <input type="text" name="instagram" class="form-control"
                                value="{{ $settings->instagram }}" required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>LinkedIn</label>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-linkedin"></i></span>
                            </div>
                            <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin }}"
                                required>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Youtube</label>
                             <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-youtube"></i></span>
                            </div>
                            <input type="text" name="youtube" class="form-control" value="{{ $settings->youtube }}"
                                required>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Github</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="zmdi zmdi-github"></i></span>
                            </div>
                            
                            <input type="text" name="github" class="form-control" value="{{ $settings->github }}"
                                required>
                                </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-md  btn-info">Kaydet</button>
                    </div>
            </form>
        </div>

    </div>
</div>

@endsection