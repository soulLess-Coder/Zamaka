@extends('layouts.admin')

@section('content')
    <x-admin-sidebar>
        <div class="overflow-x-auto">
            <table class="table w-full">

              <thead>
                <tr>

                  <th>Liabilities and Owners Equity</th>
                  <th>(Cr)Amount</th>
                  <th>Assets</th>
                  <th>(Dr)Amount</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Capital Account</td>
                  <td>0.00</td>
                  <td>Fixed Assets</td>
                  <td>0.00</td>
                </tr>

                <tr>
                    <td>Current Account</td>
                    <td>0.00</td>
                    <td>Current Assets</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td>Loan (Liablilities)</td>
                    <td>0.00</td>
                    <td>Investments</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Total Liability and Owners Equity</td>
                    <td>0.00</td>
                    <td>Total Assets</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Profit & Loss Account (Net Profit)</td>
                    <td>0.00</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0.00</td>
                    <td>Total</td>
                    <td>0.00</td>
                </tr>
              </tbody>
            </table>
          </div>
    </x-admin-sidebar>
@endsection

