@extends('../layout/' . $layout)

@section('subhead')
    <title>Ürün Ekleme</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Ürün Ekleme</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{route('urun.store')}}" method="POST" >
             @csrf
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Ürün Adı</label>
                    <input id="crud-form-1" type="text" name="urunadi" class="form-control w-full" placeholder="Yazınız">
                    <br>
                    <label for="crud-form-1" class="form-label">Ambalaj Türü</label>
                    <input id="crud-form-1" type="text" name="ambalajturu" class="form-control w-full" placeholder="Yazınız">
                    <br>
                     <label for="crud-form-1" class="form-label">Stok Adedi</label>
                    <input id="crud-form-1" type="text" name="stok" class="form-control w-full" placeholder="Yazınız">
                    <br>
                    <label for="crud-form-1" class="form-label">Fiyat</label>
                    <input id="crud-form-1" type="text" name="fiyat" class="form-control w-full" placeholder="Yazınız">
                    <br>
                   
                    <p>Ürün Türü</p>
                    <select class="form-select mt-2 sm:mr-2" aria-label="Default select example" name="kategori_id">
                    @foreach($urunturu as $ut)
        <option value="{{$ut->id}}"> {{$ut->urunturu}}</option>
        @endforeach
                       </select>
                       
                       
                </div>

                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">İptal</button>
                    <button type="submit" class="btn btn-primary w-24">Kaydet</button>
                </div>
            </div>
          </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection