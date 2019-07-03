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
             @foreach($items as $item)
                 <td>{{ $item->name }}</td>
             @endforeach
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
            @foreach($items as $item)
             <td>
                 @foreach($payslip->payitem as $pays)
                     @if ($pays->item_id == $item->id)
                         {{ number_format($pays->price) }}
                     @endif
                 @endforeach
             </td>
            @endforeach
            <td>{{ number_format($payslip->sum) }}</td>
            <td>{{ number_format($payslip->bon) }}</td>
            <td>{{ number_format($payslip->bon + $payslip->sum) }}</td>
        </tr>
    @endforeach

</table>
