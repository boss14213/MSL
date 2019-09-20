<template>
    <div class="container">
        <div class="card-body">
            <form class="form-inline" @submit="formSubmit">
            <div class="form-group">
            <strong>room type id:</strong>
            <select class="form-control" v-model="room_type_id">
                <option disabled value="">Please select one</option>
                <option>1</option>
                <option>3</option>
                <option>999</option>
            </select>
            </div>
            <div class="form-group">
            <strong>Date:</strong>
            <input type="date" class="form-control" v-model="date">
            </div>
            
            <button class="btn btn-success">Submit</button>
            </form>
            <strong>Output:</strong>
            <pre>
                {{output}}
            </pre>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              date: '',
              room_left: '',
              price: 0,
              output: ''
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('http://3.84.18.224/aspire-project/public/booking-box/api-test', {
                    date: this.date,
                    room_type_id: this.room_type_id
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error.response.data;
                });
            }
        }
    }
</script>