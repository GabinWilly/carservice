@extends('layouts.app')

@section('content')
<div class="w-full  mt-24">
    <div class="">
        <div>
            <main class="sm:container sm:mx-auto sm:mt-10 ">
                <div class="w-full sm:px-6">
            
                    @if (session('status'))
                        <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm lg:shadow-lg">
            
                        <header class="px-6 py-5 font-semibold text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                           liste des utilisateurs
                        </header>
            
            
                    </section>
                    <div class="px-6 py-6">
                        <table>
                            <thead>
                                <tr class="">
                                    <th class="lg:pl-16 sm:pl-6">#</th>
                                    <th class="lg:pl-9 sm:pl-6">Nom</th>
                                    <th class="lg:pl-9 sm:pl-6" class="">Email</th>
                                    <th>role</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
            
                            <tbody class="">
                                @foreach ($users as $user)
                                {{-- {{ $user->name }} - {{ $user->email }} --}}
                                <tr class="">
                                  <td class="pt-4 font-bold lg:pl-16 sm:pl-4">{{ $user->id }}</td>
                                  <td class="pt-4 lg:pl-16 sm:pl-4">{{ $user->name }}</td>
                                  <td class="pt-4 lg:pl-16 sm:pl-4">{{ $user->email }}</td>
                                  <td class="px-3 pt-4">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray() )  }}</td>
                                  <td class="flex px-6 pt-4 space-x-6">
                                      @can('edit-users')
                                      <a href=" {{ route('admin.users.edit', $user->id) }}">
                                          <button class="p-2 px-4 text-white bg-blue-400 rounded hover:bg-gray-400 hover:text-green-500 hover:font-semibold">Editer</button>
                                      </a>
                                      @endcan
                                      {{-- <a href="">
                                        <button class="p-2 text-white bg-yellow-300 rounded hover:bg-pink-600 hover:text-gray-600">supprimer</button>
                                    </a> --}}
                                    @can('edit-users')
                                    <form action=" {{ route('admin.users.destroy', $user->id) }}" id="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 px-4 text-white bg-yellow-300 rounded hover:bg-pink-600 hover:text-gray-600">supprimer</button>
                                    </form>
                                    @endcan
                                  </td>
                              </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection