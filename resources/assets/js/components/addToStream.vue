<template>
	
	<div class="message">
		<div class="message-header">
			Push to Stream
		</div>
		<div class="message-body">
			<form @submit.prevent="onSubmit" @keydown='form.errors.clear()'>
				<p class="control">
					<textarea class="textarea" name="body" id="" placeholder="I got stuff to say" v-model="form.body"></textarea>
				</p>
				<span class="help is-danger" 
						v-if="form.errors.has('body')" 
						v-text="form.errors.get('body')">
				</span>

				<p class="control">
					<button class="button is-primary" :disabled="form.errors.any()">Submit</button>
				</p>
			</form>
		</div>
	</div>

</template>
<script>
	export default{
		data(){
			return {
				form: new Form({body: ''})
			};
		},
		methods:{
			onSubmit(){
				this.form
					.post('/statuses')
					.then(status => this.$emit('completed',status));
			}
		}

	}
</script>