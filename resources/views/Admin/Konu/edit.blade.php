<x-app-layout>
    <x-slot name="header">Fikir Güncelle</x-slot>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('Konu.update',$konu->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Konu Başlığı</label>
                    <input type="text" name="pointName" class="form-control"  value="{{$konu->pointName}}">
                </div>
                <div class="form-group">
                    <label >İÇERİK</label>
                    <textarea  name="opinion" class="form-control"  rows="16">{{$konu->opinion}}</textarea>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-success btn-sm">Güncelle</button>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
