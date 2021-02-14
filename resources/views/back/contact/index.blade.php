@extends('back.layouts.master')
@section('title','Gelen Kutusu')
@section('content')
@section('css')
<!--Data Tables -->
<link
    href="{{ asset('back/') }}/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('back/') }}/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
@endsection
<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="card shadow mb-5">
        <div class="card-header py-3 ">
            <h6 class=" m-0 font-weight-bold text-primary">
                <span class="float-right">{{ $contacts->count() }} mesaj bulundu.
            </h6>
            </span>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Eposta </th>
                            <th>Ad Soyad</th>
                            <th>İçerik</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ str_limit($contact->message,30) }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" target="_blank" href="{{route('admin.contact.read',$contact->id)}}" title="Görüntüle"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-primary" href="mailto:{{ $contact->email }}"><i
                                            class="fa fa-paper-plane"></i></a>
                                    <a href="{{ route('admin.contact.delete',$contact->id) }}"
                                        title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>





@section('js')
<!--Data Tables js-->
<script src="{{ asset('back/') }}/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js">
</script>
<script
    src="{{ asset('back/') }}/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js">
</script>
<script src="{{ asset('back/') }}/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js">
</script>
<script>
  $('#dataTable').DataTable();

  
</script>

@endsection
@endsection
