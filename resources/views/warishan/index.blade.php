@extends('layout.app')

{{-- @section('pageTitle',trans('ওয়ারিশান লিস্ট')) --}}
@section('pageSubTitle',trans('List'))

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">ওয়ারিশান তালিকা</h4>
            </div>
        </div>
    </div>
</section>
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 mt-5">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">{{__('ক্রমিক')}}</th>
                                        <th scope="col">{{__('আবেদনকারীর নাম')}}</th>
                                        <th scope="col">{{__('ওয়ারিশান ব্যাক্তির নাম')}}</th>
                                        <th scope="col">{{__('মোবাইল')}}</th>
                                        <th scope="col">{{__('মাতার নাম')}}</th>
                                        <th scope="col">{{__('প্রোপাইল')}}</th>
                                        <th class="white-space-nowrap">{{__('এক্সসান')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($warishan as $p)
                                    <tr class="text-center">
                                    <th scope="row">{{ ++$loop->index }}</th>
                                        <td>{{$p->head_household}}</td>
                                        <td>{{$p->warishan_person_name}}</td>
                                        <td>{{$p->phone}}</td>
                                        <td>{{$p->warishan_mother_name}}</td>
                                        <td>
                                            <form action="{{route('warishans_profile',encryptor('encrypt',$p->id))}}">
                                                @csrf
                                                @method('PATCH')
                                                <input class="form-check-input m-2" type="checkbox" value="1" id="status" name="status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">যুক্ত করুন</button>
                                            </form>
                                        </td>
                                        <td class="white-space-nowrap">
                                            <a  href="{{route(currentUser().'.warishan.edit',encryptor('encrypt',$p->id))}}">
                                            <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="form{{$p->id}}" action="{{route(currentUser().'.warishan.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th colspan="8" class="text-center">No warishan Found</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="UTF-8">
        <title>Repeat Table Rows based on Input Value</title>
        <script>
          function repeatRows() {
            const input = document.getElementById('input');
            const table = document.getElementById('table');
    
            // Clear existing rows
            while (table.rows.length > 1) {
              table.deleteRow(1);
            }
    
            // Repeat rows based on input value
            const repeatCount = parseInt(input.value);
            for (let i = 1; i <= repeatCount; i++) {
              const newRow = table.insertRow();
              const serialCell = newRow.insertCell(0); // insert serial cell at position 0
              const dataCell = newRow.insertCell(1); // insert data cell at position 1
              serialCell.innerHTML = i; // set the content of the serial cell to the current serial number
              dataCell.innerHTML = 'Row ' + i;
            }
          }
        </script>
      </head>
      <body>
        <label for="input">Enter Repeat Count:</label>
        <input type="number" id="input" onblur="repeatRows()">
    
        <table id="table">
          <tr>
            <th>Serial</th> <!-- add a new table header for the serial column -->
            <th>Data</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Row 5</td>
          </tr>
        </table>
      </body>
    </html>
@endsection
