@extends('layouts.master')
@section('Content')
    <!-- With actions -->
        <div class="container px-6 mx-auto grid">
            @if (session('success'))
              <div class="flex items-left justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                  <span>{{ session('success') }}</span>
              </div>
            @endif
            
            <div class="flex items-center justify-between" >
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Tabel Sesi Ujian
              </h2>
              
              <a href="{{route('sesi_ujian.create')}}">
                <button
                class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Data
                </button>
              </a>

            </div>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Peraturan ID</th>
                      <th class="px-4 py-3">Nama</th>
                      <th class="px-4 py-3">Tgl</th>
                      <th class="px-4 py-3">Jam</th>
                      <th class="px-4 py-3">Soal-Soal</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  
                  @foreach ($table as $key => $data)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            {{$table->firstItem() + $key}}
                        </div>
                      </td>
                                          
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            {{$data->peraturan_id}}
                        </div>
                      </td>

                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            @foreach ($user as $rek)
                              @if($rek->id == $data->user_id)
                              {{$rek->nama_depan . ' ' . $rek->nama_belakang}}
                              @endif
                            @endforeach
                        </div>
                      </td>

                      <td class="px-4 py-3 text-sm">
                        <div class="flex items-center text-sm">
                            {{$data->tgl}}
                        </div>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <div class="flex items-center text-sm">
                            {{$data->jam}}
                        </div>
                      </td>

                      <td class="px-4 py-3 text-xs">
                        <div class="flex items-center text-sm">
                            <a href="{{route('sesi_ujian.show',$data->id)}}">
                              <button class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Lihat Soal-Soal
                              </button>
                            </a>
                        </div>
                      </td>
                      
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          
                          {{-- ACTION (EDIT) --}}
                          <a href="{{route('sesi_ujian.edit',$data->id)}}">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit">
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
                          </a>
                          
                          {{-- ACTION (DELETE) --}}
                          <a href="{{route('sesi_ujian.delete',$data->id)}}">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete">
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                          </a>

                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                  Showing {{$table->firstItem()}}-{{$table->lastItem()}} of {{$table->total()}}
                </span>
                <span class="col-span-2"></span>
                
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      @if ($table->onFirstPage())

                      @else
                      <a href="{{$table->previousPageUrl()}}">
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      </a>
                      @endif

                      {{-- NOMOR PAGINATION --}}
                      <li>
                        <a href="{{$table->url($table->currentPage())}}">
                        <button
                          class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          {{$table->currentPage()}}
                        </button>
                        </a>
                      </li>

                      @if($table->hasMorePages())
                        <a href="{{$table->url($table->currentPage()+1)}}">
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            {{$table->currentPage()+1}}
                          </button>
                        </li>
                        </a>
                      @endif

                      @if($table->currentPage() != $table->lastPage())
                        @if($table->currentPage() != $table->lastPage()-1)
                          @if($table->currentPage() != $table->lastPage()-2)
                          <li>
                            <span class="px-3 py-1">...</span>
                          </li>
                          @endif
                        
                          <a href="{{$table->url($table->lastPage())}}">
                          <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            {{$table->lastPage()}}
                          </button>
                          </li>
                          </a>
                        @endif
                      @endif
                      
                      @if($table->hasMorePages())
                        <a href="{{$table->nextPageUrl()}}">
                          <li>
                            <button
                              class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                              aria-label="Next"
                            >
                              <svg
                                class="w-4 h-4 fill-current"
                                aria-hidden="true"
                                viewBox="0 0 20 20"
                              >
                                <path
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"
                                  fill-rule="evenodd"
                                ></path>
                              </svg>
                            </button>
                          </li>
                        </a>
                      @endif

                    </ul>
                  </nav>
                </span>
              </div>
            </div>
        </div>
@endsection