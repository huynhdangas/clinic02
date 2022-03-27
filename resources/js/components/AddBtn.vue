<template>
    <div>
        
        <div class="form-group" v-for="(input,index) in inputs" :key="index">
            
            <select name="medicine[]" class="form-control">
                <option value="">Select Medicine</option>
                <option v-for="(m,index) in medicines" :key="index">{{m.medicine}}</option>
            </select>

            <span>
                <a href="" @click.prevent="add(index)" v-show="index == inputs.length-1" style="color: #007bff;">Add More </a>
                <a href="" @click.prevent="remove(index)" v-show="index || (!index && inputs.length > 1)" style="color: red;">Remove</a>
            </span>
        </div>

    </div>
</template>

<script>


export default {
    data() {
        return {

            inputs:[{}],
            medicines:[],
        }
    },
    methods:{
        add() {
            this.inputs.push({
                medicine:''
            })
        },
        remove(index) {
            this.inputs.splice(index,1)
        }
    },
    mounted() {
        
        axios.get('/api/medicine/all').then((response) => {
            this.medicines = response.data
            
        })
    }
}
</script>
