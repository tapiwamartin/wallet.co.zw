<?php
use App\Models\Deposit;
use App\Models\User;
use Carbon\Carbon;

 function getBalance()
    {
        $debit = Deposit::sum('debitAmount');
        $credit = Deposit::sum('creditAmount');
        $bal = $credit - $debit;

        return $bal;
    }


 ?>
