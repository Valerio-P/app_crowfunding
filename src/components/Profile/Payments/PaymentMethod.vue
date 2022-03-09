<template>
  <!-- Table item -->
  <tr>
    <!-- Action item -->
    <td>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="flexRadioDefault"
          id="flexRadioDefault1"
        />
        <label class="form-check-label" for="flexRadioDefault1"> </label>
      </div>
    </td>

    <!-- Title item -->
    <td>
      <h6 class="mt-2 mt-lg-0 mb-0">
        <a href="#" class="text-decoration-none">{{ name }}</a>
      </h6>
    </td>

    <!-- Payment method item -->
    <td>
        <i v-if="circuit == 'visa'" class="fab fa-cc-visa text-info"></i>
        <i v-if="circuit == 'mastercard'" class="fab fa-cc-mastercard text-danger"></i>
        <i v-if="circuit == 'sepa_debit'" class="fas fa-university"></i>
      <span class="ms-2 text-dark">{{ paymentMethod }}</span>
    </td>

    <!-- Status item -->
    <td>
      <span v-if="status" class="badge bg-success bg-opacity-10 text-success">
        Active
      </span>
      <span v-else class="badge bg-danger bg-opacity-10 text-danger">
        Disabled
      </span>
    </td>

    <!-- Date item -->
    <td>
      <span class="text-dark">{{ date }}</span>
    </td>
  </tr>
</template>

<script>
export default {
  props: {
    name: String,
    paymentMethod: String,
    circuit: String,
    status: Boolean,
    date: String,
  },
};
</script>

<style>
</style>