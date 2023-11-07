<script context="module">
  export { default as layout } from '../layouts/layout.svelte';

</script>

<script>

  import { router,Link, useForm } from '@inertiajs/svelte';

  import axios from 'axios';

  let form =useForm({
     name: null,
     email:null,
     phone:null,
     depart:null,
     delivery:null,
     weight:null,
     dimension:null,
     message:null,
  })
let error;

  function textChange(event){
    $form.message = event.target.value;
  }

  async function handleSubmit (){
      // // console.log($form);
      // // const resp =  await axios.post('/quote',$form);
       
      //  console.log(resp.data);

      // $form.post('/quote', form);
  
      // return $form.reset();

      try {
      // Use axios for your HTTP request
       const response = await axios.post('/quote', form);
      //  router.post('/quote', form);
      //  const response = await $form.post('/quote' , form)

     
      console.log(response.data);
 
      form.reset();
    } catch (error) {
      
        if (error.response.status === 422) {
      
             console.log(error.response.data); // Log the validation errors
           let   errorz = Object.keys(error.response.data.errors);
             console.log(errorz);
        } else {
          console.error(error);
        }
    }
  }

</script>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Get a Quote</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>

      <nav>
        <div class="container">
          <ol>
            <li><Link href="/">Home</Link></li>
            <li>Get a Quote</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(../img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form on:submit|preventDefault={handleSubmit} class="php-email-form">
              <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
              <h3>Get a quote {$form.message}</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" bind:value={$form.depart} name="depart" class="form-control" placeholder="City of Departure" required>
                    {#if $form.errors.depart}
                      <div class="text-danger">
                        {$form.errors.depart}
                      </div>
                    {/if}
                </div>

                <div class="col-md-6">
                  <input type="text" bind:value={$form.delivery} name="delivery" class="form-control" placeholder="Delivery City" required>
                    {#if $form.errors.delivery}
                      <div class="text-danger">
                        {$form.errors.delivery}
                      </div>
                    {/if}
                </div>

                <div class="col-md-6">
                  <input type="text" bind:value={$form.weight} name="weight" class="form-control" placeholder="Total Weight (kg)" required>
                    {#if $form.errors.weight}
                      <div class="text-danger">
                        {$form.errors.weight}
                      </div>
                    {/if}
                </div>

                <div class="col-md-6">
                  <input type="text" bind:value ={$form.dimension} name="dimension" class="form-control" placeholder="Dimensions (cm)" required>
                    {#if $form.errors.dimension}
                      <div class="text-danger">
                        {$form.errors.dimension}
                      </div>
                    {/if}
                </div>

                <div class="col-lg-12">
                  <h4>Your Personal Details</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" bind:value={$form.name} name="name" class="form-control" placeholder="Name" required>
                      {#if $form.errors.name}
                          <div class="text-danger">
                            {$form.errors.name}
                          </div>
                      {/if}
                </div>

                <div class="col-md-12 ">
                  <input type="email" bind:value={$form.email} class="form-control" name="email" placeholder="Email" required>
                      {#if $form.errors.email}
                        <div class="text-danger">
                          {$form.errors.email}
                        </div>
                      {/if}
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" bind:value ={$form.phone} name="phone" placeholder="Phone" required>
                      {#if $form.errors.phone}
                            <div class="text-danger">
                              {$form.errors.phone}
                            </div>
                      {/if}
                </div>

                <div class="col-md-12">
                  <textarea  class="form-control"
                            on:input={textChange} 
                            name="message"
                            rows="8"  placeholder="Message" required
                  >
                  </textarea>
                      {#if $form.errors.message}
                          <div class="text-danger">
                              {$form.errors.message}
                          </div>
                      {/if}
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->
