<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
  <section class="w-full">
    <div class="max-w-6xl mx-4 xl:mx-auto mt-20">
      <div class="grid md:grid-cols-8 items-center mb-2">
        <h3 class="md:col-span-7 mb-2 text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">
          Explore Residential Areas in Philippines
        </h3>
        <Link href="/listing"
          class="md:col-span-1 text-blue-700 hover:opacity-80 flex md:justify-end items-center gap-1 font-medium">
        More
        <i class="fa-solid fa-chevron-right"></i>
        </Link>
      </div>
      <div class="bg-gray-100 dark:bg-gray-700 rounded-lg grid grid-cols-3 py-5 px-6">
        <div class="flex flex-col">
          <Link href="/listing?search=Quezon" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
            Quezon City
          </Link>
          <Link href="/listing?search=Taguig" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
            Taguig City
          </Link>

        </div>
        <div class="flex flex-col">
          <Link href="/listing?search=Pateros" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
          Pateros City
          </Link>
          <Link href="/listing?search=Makati" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
          Makati City
          </Link>
       
        </div>
        <div class="flex flex-col">
          <Link href="/listing?search=Pateros" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
            Paranaque City
          </Link>
          <Link href="/listing?search=Makati" class="font-semibold leading-8 hover:opacity-80 dark:text-white">
            Pasay City
          </Link>
    
        </div>

      </div>
    </div>
  </section>
</template>