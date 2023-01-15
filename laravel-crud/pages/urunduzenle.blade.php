@extends('../layout/' . $layout)

@section('subhead')
    <title>Ürün Düzenleme</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Ürün Düzenleme</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ route('urun.update', $urun->uid) }}" method="POST" >
              @csrf
              @method('PUT')

            <div class="intro-y box p-5">
                <div>
                     <label for="crud-form-1" class="form-label">Ürün Adı</label>
                    <input name="urunadi" id="crud-form-1" value="{{ $urun->urunadi }}" type="text" class="form-control w-full" placeholder="Yazınız">
                    <br>
                    <label for="crud-form-1" class="form-label">Ambalaj Türü</label>
                    <input name="ambalajturu" id="crud-form-1" value="{{ $urun->ambalajturu }}" type="text" class="form-control w-full" placeholder="Yazınız">
                    <br>
                    <label for="crud-form-1" class="form-label">Stok Adedi</label>
                    <input name="stok" id="crud-form-1" value="{{ $urun->stok }}" type="text" class="form-control w-full" placeholder="Yazınız">
                    <br>
                    <label for="crud-form-1" class="form-label">Fiyat</label>
                    <input name="fiyat" id="crud-form-1" value="{{ $urun->fiyat }}" type="text" class="form-control w-full" placeholder="Yazınız">
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
                    <button type="submit" class="btn btn-primary w-24">Güncelle</button>
                </div>
            </div>
          </from>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
