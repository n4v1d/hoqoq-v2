<head>
    <meta charset="utf-8">
</head>
{{ header("Content-Type:   application/vnd.ms-excel; charset=utf-8")}}
{{ header("Content-Disposition: attachment; filename=SalaryReport.xls") }}
{{ header("Expires: 0") }}
{{ header("Cache-Control: must-revalidate, post-check=0, pre-check=0") }}
{{ header("Cache-Control: private",false)  }}

<table class="table m-0">
     <thead>
         <tr>
             <td>نام پرسنل</td>
             <td>گروه کاری</td>
             <td>محل کار</td>
             <td>ماه </td>
             <td>حقوق</td>
             <td>بن</td>
             <td> جمع کل</td>
         </tr>
     </thead>
    @foreach($payslips as $payslip)
        <tr>
            <td>{{ $payslip->personel->name }}</td>
            <td>{{ $payslip->group->name }}</td>
            <td>{{ $payslip->branch->name }}</td>
            <td>{{ $payslip->month->name }}</td>
            <td>{{ number_format($payslip->sum) }}</td>
            <td>{{ number_format($payslip->bon) }}</td>
            <td>{{ number_format($payslip->bon + $payslip->sum) }}</td>
        </tr>
    @endforeach
</table>
