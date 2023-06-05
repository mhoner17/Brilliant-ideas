<x-app-layout>
    <x-slot name="header">Fikirler</x-slot>
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">
        <a href="{{route('Konu.create')}}" class="btn btn-sm btn-danger">Fikir Oluştur</a></h5>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi maxime, officia pariatur reiciendis reprehenderit vel voluptas voluptatibus. Blanditiis delectus ea enim eos expedita fugit hic quae, quaerat suscipit unde voluptate?
    </div>
    </div>

        @foreach($konus as $konu)

        <div class="position-relative bg-light m-5">
            <img src={{$konu->Konu_photo_path}} alt="img">

            <a href="{{route('Konu.edit',$konu->id)}}" class="position-absolute top-0 mx-5 end-0 btn btn-sm btn-primary" >DÜZENLE</a>
            <a href="{{route('Konu.destroy',$konu->id)}}" class="position-absolute top-0 end-0 btn btn-sm btn-danger" >SİL</a>

            <h4>{{$konu->pointName}} </h4>
            <P>
           {{$konu->opinion}}
            </P>

        </div>
        @endforeach
    {{$konus->links()}}

</x-app-layout>
