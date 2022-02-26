<template>
  <div class="col-lg-8 col-md-7 mb-5">
    <h1 class="h2">Documenti</h1>
    <div class="mb-2 pt-1">
      I tuoi documenti non sono stati ancora approvati
    </div>
    <div class="progress mb-4" style="height: 0.25rem">
      <div
        class="progress-bar bg-danger"
        role="progressbar"
        style="width: 50%"
        aria-valuenow="50"
        aria-valuemin="0"
        aria-valuemax="100"
      ></div>
    </div>
    <label class="form-label pt-2" for="account-bio">Upload Images</label>
    <div class="row pb-2">
      <input
        id="filepond"
        type="file"
        class="filepond"
        name="document"
        multiple
        data-allow-reorder="true"
        data-max-file-size="3MB"
        data-max-files="3"
      />
    </div>
  </div>
</template>

<script>
import * as FilePond from 'filepond';

// Import the plugin code
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

export default {
  mounted() {
    FilePond.registerPlugin(
      FilePondPluginImagePreview,
      FilePondPluginImageExifOrientation,
      FilePondPluginFileValidateSize
    );

    FilePond.create(document.querySelector("#filepond"), {});

    let csrf = document
      .getElementsByName("csrf-token")[0]
      .getAttribute("content");

    FilePond.setOptions({
      server: {
        url: "http://localhost:8000/",
        process: {
          url: "./api/upload/documents",
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": csrf,
          },
        },
      },
    });
  },
};
</script>

<style>
</style>