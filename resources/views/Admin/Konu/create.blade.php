<x-app-layout>
    <x-slot name="header">Fikir oluştur</x-slot>

        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('Konu.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Konu Başlığı</label>
                        <input type="text" name="pointName" class="form-control"  value="{{old('pointName')}}">
                    </div>
                    <div class="form-group">
                        <label >İÇERİK</label>
                        <textarea  name="opinion" class="form-control"  rows="16">{{ old('opinion') }}</textarea>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-success btn-sm">Oluştur</button>
                    </div>
                </form>

            </div>
        </div>

</x-app-layout>
