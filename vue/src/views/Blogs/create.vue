<template>
	<div ref="editor">
		<p>Hello Summernote</p>
	</div>
</template>
  
<script>
import Quill from 'quill';

export default {
	mounted() {
		const editor = new Quill(this.$refs.editor, {
			theme: 'snow' // or 'bubble'
		});
	}
};
</script>  