
<div class="bg-white-300 border border-gray-300 p-5 text-gray-600">
    <select name="" id="taskstatus" onchange="filterStatus()">
        <option value="all" @if($status=='all') selected @endif>All</option>
        <option value="completed" @if($status=='completed') selected @endif>Completed</option>
        <option value="pending" @if ($status =='pending') selected @endif>Pending</option>
    </select>
</div>
<script>
    function filterStatus() {
        let status =document.getElementById('taskstatus').value;
        if(status == 'all'){
          location.href='/tasks';
        }else {
            location.href='/tasks?status='+status;
        }
    }
</script>