 <template>
    <div>
      <div >
        <router-view></router-view>
      </div>
    </div>
</template>

<script>
export default {
    data(){
        return {

        }
    },
    methods:{

    },
    async created(){
        await this.$store.dispatch('setAuthUser',window.authUser)
    }


}
</script>
