@extends('layout.sidebare');
@section('Content')
    <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
        <form action="{{ route('late.store', $lates['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                    Siswa</label>
                                <div class="mt-2">
                                    <select id="name" name="name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        @foreach ($students as $item)
                                           <option value="{{ $item['id'] }}" {{ $item['id'] == $lates['name'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <label for="date_time_late"
                                class="block text-sm font-medium leading-6 text-gray-900  mt-3">Tanggal</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="date" name="date_time_late" id="date_time_late"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="janesmith" value="{{ $lates['nis'] }}">
                                    @error('date_time_late')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="information" class="block text-sm font-medium leading-6 text-gray-900">Keterangan
                                Keterlambatan</label>
                            <div class="mt-2">
                                <textarea id="information" name="information" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $lates['information'] }}"></textarea>
                                @error('information')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="bukti" class="block text-sm font-medium leading-6 text-gray-900">Bukti</label>
                            <input type="file" name="bukti" id="bukti" placeholder="masukan bukti">
                            @error('bukti')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
      
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('late.index') }}">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

    </div>
@endsection
