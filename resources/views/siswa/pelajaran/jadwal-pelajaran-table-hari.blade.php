<div class="card">
    <div class="card-header card-header-rose card-header-text">
      <div class="card-text">
        <h4 class="card-title">{{ $hari }}</h4>
      </div>
    </div>
    <div class="card-body ">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>Les</th>
              <th>Jadwal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="{{$hari}}">
            @foreach($data as $key => $obj)
                <tr>
                     <td>{{$key + 1}}</td>
                     <td>{{$obj->mataPelajaran->nama_pelajaran ?? ''}}</td>
                     <td>
                        {{-- <button data-id="{{$obj->id}}" type="button" class="btn btn-delete btn-mini btn-danger shadow-sm" data-toggle="modal" data-target="#confirmDeleteModal">
                            <i class="fa fa-trash"></i>
                        </button> --}}
                     </td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>