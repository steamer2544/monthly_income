<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ระบบบันทึกรายรับรายจ่ายประจำเดือน</title>

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        

    </head>
    <body>
        <div class="container">
            <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อรายการใช้จ่าย</th>
                    <th scope="col">จำนวนเงิน</th>
                    <th scope="col">วันที่ใช้จ่าย</th>
                    <th scope="col">ประเภท รายรับ/รายจ่าย</th>
                    <th scope="col">วันเวลาที่บันทึกข้อมูล</th>
                    <th scope="col">วันเวลาที่ปรับปรุงข้อมูลล่าสุด</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>

                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($index as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->day}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->created_at }}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{route('edit', $item->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('delete', $item->id)}}" class="btn btn-warning">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>

            <button type="button" class="btn btn-success" action ="{{route('report')}}" method="GET">Report</button>

            <div class="card-header">
                เพิ่มข้อมูล
            </div>
            <div class="card-body">
                
                <form action ="{{route('insert')}}" method="POST" encrypt="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">ชื่อรายการรายรับ/รายจ่าย</label>
                      <input type="text" class="form-control" name="name">
                      <label for="number" class="form-label">จำนวนเงิน</label>
                      <input type="text" class="form-control" name="amount">
                      <label for="name" class="form-label">วันที่ใช้จ่าย</label>
                      <input type="date" class="form-control" name="day">
                      <label for="name" class="form-label">ประเภท รายรับ/รายจ่าย</label>
                      <input type="text" class="form-control" name="type">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
    
</html>
