<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Tweet from '@/Components/Tweet.vue'
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
</script>

<template>
    <Head title="Welcome" />

   <TwitterLayout>
     <div class="text-white">
          <div class="flex">
               <Tweet :tweet="{
                    name: 'Roberto Sasso',
                    handle: '@robsax96',
                    image: 'https://media.licdn.com/dms/image/D4D03AQECk0Layd6ttA/profile-displayphoto-shrink_800_800/0/1697020693639?e=1705536000&v=beta&t=E1TI4t6irvyijgpg77La83N0sds8KcpZprhUjAX0jC8',
                    tweet: 'Quanto è bello programmare',
                    file: '/videos/prova.mp4',
                    is_video: true,
                    comments: '37',
                    retweets: '54',
                    likes: '96',
                    analytics: '93'
               }" />
          </div>
          <div class="border-b border-b-gray-800 mt-2">

          </div>
     </div>
   </TwitterLayout>
</template>


å