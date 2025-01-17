  @extends('layouts.main')

  @section('title', 'Riwayat Pemesanan - Jelajahi Desa')

  @section('content')

      <main class="pt-20">
          <div class="container mx-auto bg-white shadow-md rounded-lg p-6">
              <h1 class="text-2xl font-bold mb-6 text-center">Riwayat Pemesanan</h1>
              <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
                  <thead class="bg-gray-200">
                      <tr class="text-left">
                          <th class="border border-gray-300 px-4 py-3">#</th>
                          <th class="border border-gray-300 px-4 py-3">Nama Depan</th>
                          <th class="border border-gray-300 px-4 py-3">Nama Belakang</th>
                          <th class="border border-gray-300 px-4 py-3">Email</th>
                          <th class="border border-gray-300 px-4 py-3">Nomor Telepon</th>
                          <th class="border border-gray-300 px-4 py-3">Jumlah Penumpang</th>
                          <th class="border border-gray-300 px-4 py-3">Tanggal</th>
                          <th class="border border-gray-300 px-4 py-3">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($pesanan as $no => $data)
                          <tr class="hover:bg-gray-50">
                              <td class="border border-gray-300 px-4 py-3 text-center">{{ $no + 1 }}</td>
                              <td class="border border-gray-300 px-4 py-3">{{ $data->nama_depan }}</td>
                              <td class="border border-gray-300 px-4 py-3">{{ $data->nama_belakang }}</td>
                              <td class="border border-gray-300 px-4 py-3">{{ $data->email }}</td>
                              <td class="border border-gray-300 px-4 py-3">{{ $data->nomor_telpon }}</td>
                              <td class="border border-gray-300 px-4 py-3 text-center">{{ $data->jumlah_penumpang }}</td>
                              <td class="border border-gray-300 px-4 py-3 text-center">{{ $data->tanggal }}</td>
                              <td class="border border-gray-300 px-4 py-3">
                                  <div class="flex justify-center space-x-2">
                                      <form method="POST" action="{{ route('pesanan.destroy', $data->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit"
                                              class="p-2 bg-red-500 text-white rounded-full hover:bg-red-600"
                                              title="Hapus">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                  fill="currentColor">
                                                  <path fill-rule="evenodd"
                                                      d="M8.707 3.293a1 1 0 00-1.414 0L5 5.586 3.293 3.879a1 1 0 00-1.414 1.414L3.586 7l-1.707 1.707a1 1 0 101.414 1.414L5 8.414l1.707 1.707a1 1 0 001.414-1.414L6.414 7l1.707-1.707a1 1 0 000-1.414z"
                                                      clip-rule="evenodd" />
                                              </svg>
                                          </button>
                                      </form>
                                      <a href="{{ route('pesanan.edit', $data->id) }}"
                                          class="p-2 bg-yellow-500 text-white rounded-full hover:bg-yellow-600"
                                          title="Edit">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                              fill="currentColor">
                                              <path
                                                  d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828zM5 13H4a1 1 0 01-1-1v-1a1 1 0 011-1h1v2zm10.121-8.121a1 1 0 000 1.414l2.828 2.828a1 1 0 001.414-1.414L16.536 4.88a1 1 0 00-1.415 0z" />
                                          </svg>
                                      </a>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>

              @if ($pesanan->isEmpty())
                  <p class="mt-6 text-gray-500 text-center">Belum ada riwayat pemesanan.</p>
              @endif
          </div>
      </main>

  @endsection
