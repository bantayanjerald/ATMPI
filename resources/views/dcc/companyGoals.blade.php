@extends('layouts.main')
@section('content')
<section class="mainContent" style="background-image: url('{{asset('images/BG.png')}}');height:817px;width:100%">
    {{-- <div class="cardbox"  >
        <div class="card">
            <div>
                <div class="numbers">1,055</div>
                <div class="cardName">New Applicants</div>
            </div>
            <div class="iconBox"><i class="bx bx-history"></i></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">1,055</div>
                <div class="cardName">Total Passed</div>
            </div>
            <div class="iconBox"><i class="bx bx-history"></i></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">1,055</div>
                <div class="cardName">Total Failed</div>
            </div>
            <div class="iconBox"><i class="bx bx-history"></i></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">1,055</div>
                <div class="cardName">Total Applicants</div>
            </div>
            <div class="iconBox"><i class="bx bx-history"></i></div>
        </div>
    </div>
     <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Applicants</h2>
                <a href="" class="btn">View all</a>
            </div>
            <div class="cardBody">

                <table>
                    <thead>
                        <tr>
                            <td>Applicant's Name</td>
                            <td>Examination Date</td>
                            <td>Rating</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emma Smith</td>
                            <td>05 May 2021, 5:20 pm</td>
                            <td>8.5</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                        <tr>
                            <td>Melody Macy</td>
                            <td>10 Nov 2021, 8:43 pm
                            </td>
                            <td>7.9</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                        <tr>
                            <td>Max Smith</td>
                            <td>15 Apr 2021, 9:23 pm</td>
                            <td>5.8</td>
                            <td><span class="status return">Failed</span> </td>
                        </tr>
                        <tr>
                            <td>Sean Bean</td>
                            <td>21 Feb 2021, 9:23 pm</td>
                            <td>7.5</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                        <tr>
                            <td>Brian Cox</td>
                            <td>15 Apr 2021, 11:05 am</td>
                            <td>5.6</td>
                            <td><span class="status return">Failed</span> </td>
                        </tr>
                        <tr>
                            <td>Mikaela Collins</td>
                            <td>20 Jun 2021, 6:05 pm</td>
                            <td>9.1</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                        <tr>
                            <td>Francis Mitchan</td>
                            <td>24 Jun 2021, 11:30 am</td>
                            <td>9.3</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                        <tr>
                            <td>Olivia Wild</td>
                            <td>24 Jun 2021, 10:10 pm</td>
                            <td>5.1</td>
                            <td><span class="status return">Failed</span> </td>
                        </tr>
                        <tr>
                            <td>Neil Owen</td>
                            <td>25 Jul 2021, 6:05 pm</td>
                            <td>4.9</td>
                            <td><span class="status return">Failed</span> </td>
                        </tr>
                        <tr>
                            <td>Dan Wilson</td>
                            <td>10 Mar 2021, 11:30 am</td>
                            <td>8.7</td>
                            <td><span class="status delivered">Passed</span> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Customers</h2>
                <a href="#" class="btn">View all</a>
            </div>
            <table>
                <tbody>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    <tr>

                        <td width="60px"><div class="imgBox"><img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt=""></div></td>
                        <td><h4>David <br><span>Italy</span></h4></td>

                    </tr>
                    </tbody>
            </table>
        </div>





    </div> --}}
</section>

@endsection
