<x-app-layout>
    @section('title', 'Traffic')

    <h2 class="justify-center text-center text-2xl text-bold mb-4"><b>Top 5 Tweets with Highest Donations</b></h2>
    <ul>
        @foreach($topTweets as $tweet)
        

        <table id="topTweets" class="mb-10">
            <thead>
                <tr>
                    <th>Tweet</th>
                    <th>Date Created</th>
                    <th>Total Donations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topTweets as $topTweet)
                    <tr>
                        <td>{{ $topTweet->body }}</td>
                        <td>{{ $topTweet->created_at }}</td>
                        <td>{{ 'Rp ' . number_format($topTweet->transactions->sum('amount'), 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @endforeach
    </ul>

    <h2 class="justify-center text-center text-2xl text-bold mt-8"><b>Top 5 Categories with Highest Donations</b></h2>
    <div>
        <canvas id="categoryChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('categoryChart').getContext('2d');
            var categories = @json($topCategories->pluck('name'));
            var donations = @json($topCategories->pluck('totalDonation'));

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Donations',
                        data: donations,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        });

    // $(document).ready(function() {
    //     $('#topTweets').DataTable();
    // });
    $(document).ready(function() {
    $('#topTweets').DataTable({
        "lengthChange": false, // Disable "Show entries" dropdown
        "searching": false, 
        "dom": "t",// Disable search bar
        "language": {
            "info": "", 
            "infoEmpty": "", // Remove the empty result message
            "infoFiltered": "",// Remove the "Showing x out of y entries" message
            "paginate": {
                "first": "",
                "last": "",
                "previous": "",
                "next": "" // Remove the "Next" button
            }
        }
    });
});


    </script>

</x-app-layout>
