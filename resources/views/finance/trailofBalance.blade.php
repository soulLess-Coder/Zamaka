@extends('layouts.admin')

@section('content')
        <x-admin-sidebar>
            <div class="overflow-x-auto">
                <table class="table w-full">

                  <thead>
                    <tr>
                      <th>Account Name</th>
                      <th>Type</th>
                      <th>O/P Balance</th>
                      <th>Debit Total</th>
                      <th>Credit Total</th>
                      <th>C/L Balance</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="font-bold">Assets</td>
                      <td class="font-bold">Group</td>
                      <td class="font-bold">0.00</td>
                      <td class="font-bold">0.00</td>
                      <td class="font-bold">0.00</td>
                      <td class="font-bold">0.00</td>
                    </tr>
                    <tr>
                      <td>Fixed Assets</td>
                      <td>Group</td>
                      <td>0.00</td>
                      <td>0.00</td>
                      <td>0.00</td>
                      <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Current Assets</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>Investments</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                      </tr>
                    <tr>
                        <td class="font-bold">Total Liability and Owners Equity</td>
                        <td class="font-bold">Group</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                    </tr>
                    <tr>
                        <td>Capital Account</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Current Laiabilities</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Loans (Laiabilities)</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Incomes</td>
                        <td class="font-bold">Group</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                    </tr>
                    <tr>
                        <td>Direct Incomes</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Indirect Incomes</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Sales</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Expenses</td>
                        <td class="font-bold">Group</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                    </tr>
                    <tr>
                        <td>Direct Expenses</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Indirect Expenses</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>Purchases</td>
                        <td>Group</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Total</td>
                        <td></td>
                        <td></td>
                        <td class="font-bold">0.00</td>
                        <td class="font-bold">0.00</td>
                        <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
    </x-admin-sidebar>
@endsection
