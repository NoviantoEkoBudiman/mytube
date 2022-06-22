@extends('layouts.template')

@section('content')
    <div class="col-12">
        <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Channel
                <!-- Button trigger modal -->
                <button type="button" class="badge badge-sm bg-gradient-success" style="float: right;margin-right: 15px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Buat channel baru
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Channel Baru</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('channel.store') }}">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="input-group input-group-outline my-3">
                                          <label class="form-label">Judul Channel</label>
                                          <input type="text" class="form-control" name="channel_name">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="input-group input-group-outline is-valid my-3">
                                          <label class="form-label">Deskripsi Channel</label>
                                          <textarea class="form-control" name="channel_description" cols="60"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Channel</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Video</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Likes</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dislikes</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Comments</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Tekotok dikotok-kotok Tekotok dikotok-kotok</h6>
                        </div>
                    </div>
                    </td>
                    <td>
                    <span class="badge badge-sm bg-gradient-primary">1000</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">2000</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="badge badge-sm bg-gradient-secondary">3000</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="badge badge-sm bg-gradient-info">4000</span>
                    </td>
                    <td>
                    <span class="badge badge-sm bg-gradient-dark">Detail</span>
                    <span class="badge badge-sm bg-gradient-warning">Edit</span>
                    <span class="badge badge-sm bg-gradient-danger">Hapus</span>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection