@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
                     <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                         <span class="panel-title-text">Tambah Baju</span>
                                    </div>
                                </div>
                               <div class="panel-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                                            <div class="col-10">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-2 col-form-label">Ukuran</label>
                                            <div class="col-10">
                                                <input class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-email-input" class="col-2 col-form-label">Harga Pendek</label>
                                            <div class="col-10">
                                                <input class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-url-input" class="col-2 col-form-label">Harga Panjang</label>
                                            <div class="col-10">
                                                <input class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                            <div class="col-10">
                                                <input class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="reset" class="btn btn-success mr-2">Submit</button>
                                    <button type="reset" class="btn btn-outline btn-secondary btn-outline-1x">Cancel</button>
                                </div>
                            </div>
                                </div>
                            </div>

@endsection
