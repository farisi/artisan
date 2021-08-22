<template>
    
</template>
<script>

import axios from 'axios'
export default ({
    name:'logout',
    setup() {
        const logout = async () =>{
            await axios.post('logout')
            this.$route.push('/')
        }
        return {

        }
    },
})
</script>
