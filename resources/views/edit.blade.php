<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แก้ไข</title>

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        

    </head>
    <body>
        <div class="container">

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="card-body">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    แก้ไขข้อมูล
                                </div>
                                <div class="card-body">
                                    
                                    <form action ="{{route('update', $index->id)}}" method="POST" encrypt="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                          <label for="name" class="form-label">ชื่อรายการรายรับ/รายจ่าย</label>
                                          <input type="text" class="form-control" name="name" value="{{$index->name}}">
                                          <label for="number" class="form-label">จำนวนเงิน</label>
                                          <input type="text" class="form-control" name="amount" value="{{$index->amount}}">
                                          <label for="name" class="form-label">วันที่ใช้จ่าย</label>
                                          <input type="date" class="form-control" name="day" value="{{$index->day}}">
                                          <label for="name" class="form-label">ประเภท รายรับ/รายจ่าย</label>
                                          <input type="text" class="form-control" name="type" value="{{$index->type}}">
                                        </div>
        
        
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</body>
    
</html>
