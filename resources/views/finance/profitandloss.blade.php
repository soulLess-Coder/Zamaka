@extends('layouts.admin')

@section('content')
    <x-admin-sidebar>
        <div class="overflow-x-auto">
            <table class="table w-full">

              <thead>
                <tr>

                  <th>Gross Expenses</th>
                  <th>(Dr)Amount</th>
                  <th>Gross Incomes</th>
                  <th>(Cr)Amount</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Direct Expenses</td>
                  <td>0.00</td>
                  <td>Direct Incomes</td>
                  <td>0.00</td>
                </tr>

                <tr>
                    <td>Purchases</td>
                    <td>0.00</td>
                    <td>Sale</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td>Total Gross Expenses</td>
                    <td>0.00</td>
                    <td>Total Gross Incomes</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Gross Profit C/O</td>
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
                <thead>
                    <tr>

                      <th>Expenses</th>
                      <th>(Dr)Amount</th>
                      <th>Incomes</th>
                      <th>(Cr)Amount</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Indirect Expenses</td>
                      <td>0.00</td>
                      <td>Indirect Incomes</td>
                      <td>0.00</td>
                    </tr>

                    <tr>
                        <td>Total Expenses</td>
                        <td>0.00</td>
                        <td>Total Incomes</td>
                        <td>0.00</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>Gross Profit B/F</td>
                        <td>0.00</td>
                    </tr>

                    <tr>
                        <td>Net Profit</td>
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
