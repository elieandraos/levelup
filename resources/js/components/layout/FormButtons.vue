<template>
	 <div class="form-group buttons">
	        <button type="submit" class="btn btn-primary btn-lg">
	            <i class="fa fa-floppy-o"></i> Save
	        </button>
	        <a class="btn btn-secondary btn-lg" :href="backUrl">
	            <i class="fa fa-arrow-left"></i> Back
    		</a>
	</div>
</template>

<script>
    export default {
        props: {
            backUrl: {
                required: true,
            }
        }
    }
</script>

<style scoped>
	.buttons {
		margin-top: 20px;
	}
	.buttons a, .buttons button {
		margin-right: 10px;
	}
</style>