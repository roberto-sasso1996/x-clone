<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import Twitter from 'vue-material-design-icons/Twitter.vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import Plus from 'vue-material-design-icons/Plus.vue';
import Close from 'vue-material-design-icons/Close.vue';
import ChevronDown from 'vue-material-design-icons/ChevronDown.vue';
import Earth from 'vue-material-design-icons/Earth.vue';
import Imageoutline from 'vue-material-design-icons/Imageoutline.vue';
import FileGifBox from 'vue-material-design-icons/FileGifBox.vue';
import Emoticon from 'vue-material-design-icons/Emoticon.vue';
import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue';
import MenuItem from '@/Components/MenuItem.vue';

let createTweet = ref(false)
let textarea = ref(null)
let showUpload = ref('')
let uploadType = ref('')
let tweet = ref('')
let randImg1 = ref(`https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`)
let randImg2 = ref(`https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`)

const getFile = (e) => {
    File.value = e.target.files[0]
    showUpload.value = URL.createObjectURL(e.target.files[0]);
    uploadType.value = file.value.name.split('.').pop();
}

const closeMessageBox = () => {
    createTweet.value = false
    tweet.value = ''
    showUpload.value = ''
    uploadType.value = ''
}

const textareaInput = (e) => {
    textarea.value.style.height = "auto";
    textarea.value.style.height = `${e.target.scrollHeight}px`;
}

</script>

<template>
    <div class="fixed w-full">
        <div class="max-w-[1400px] flex mx-auto">
            <div class="lg:w-3/12 w-[60px] h-[100vh] max-w-[350px] lg:px-4 lg:mx-auto">
                <div class="p-2 px-3 mb-4">
                    <img src="/image/x_logo.png" class="logo-x">
                </div>
                <MenuItem iconString="Home" />
                <MenuItem iconString="Explore" />
                <MenuItem iconString="Notifications" />
                <MenuItem iconString="Messages" />
                <MenuItem iconString="Profile" />

                <button 
                    @click="createTweet = true"
                    class="
                        lg:w-full
                        mt-8
                        ml-2
                        text-white
                        font-extrabold
                        text=[22px]
                        bg-[#1C9CEF]
                        p-3
                        px-3
                        rounded-full
                        cursor-pointer
                    "
                >
                    <span class="lg:block hidden">Tweet</span>
                    <span class="block lg:hidden"><Plus /></span>
                </button>
            </div>
            <div class="lgt:w-7/12 w-11/12 border-x border-gray-800 relative">
                <div class="bg-black bg-opacity-50 backdrop-blur-md z-10 absolute w-full">
                    <div class="border-gray-800 border-b w-full">
                        <div class="w-full text-white text-[22px] font-extrabold p-4">
                            Home
                        </div>
                        <div class="flex">
                            <div class="
                                    flex 
                                    items-center 
                                    justify-center 
                                    w-full 
                                    h-[60px] 
                                    text-white 
                                    text[17px] 
                                    font-extrabold 
                                    p-4 
                                    hover:bg-gray-500
                                    cursor-pointer
                                    transition
                                    duration-200
                                    ease-in-out
                                "
                            >
                                <div class="inline-block text-center border-b-4 border-b-[#1C9CEF] h-[60px]">
                                    <div class="my-auto mt-4">Per te</div>
                                </div>
                            </div>
                            <div class="
                                    w-full 
                                    h-[60px] 
                                    text-gray-500 
                                    text[17px] 
                                    font-extrabold 
                                    p-4 
                                    hover:bg-gray-500
                                    cursor-pointer
                                    transition
                                    duration-200
                                    ease-in-out
                                "
                            >
                                <div class="text-center">Seguiti</div>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 z-0 h-full overflow-auto scrollbar-hide">
                    <div class="mt-[126px]"></div>
                    <slot />
                    <div class="pb-4"></div>
                </div>
            </div>

            <div class="lg:block hidden lg:w-4/12 h-screen border-l border-gray-800 pl-4">
                <div class="w-full p-1 mt-2 pc-4 lg:flex items-center rounded-full hidden bg-[#212327]">
                    <Magnify fillColor="#5e5c5c" :size="25"/>
                    <input 
                        type="text"
                        placeholder="Cerca su X"
                        class="appearance-none
                               w-full
                               border-0
                               py-2
                               bg-[#212327]
                               text-gray-100
                               placeholder-gray-500
                               leading-tight
                               focus:ring-0 
                        "
                    >
                </div>
                <div class="w-full mt-4 rounded-lg lg:block hidden bg-[#212327]">
                    <div class="w-full p-4 text-white font-extrabold mb-6 text-[20px]">
                        Che succede?
                    </div>
                    <div class="h-[80px] hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                        <div class="flex p-3 justify-between h-[80px] py-3">
                            <div>
                                <div class="text-[14px] text-gray-400">Milan LIVE</div>
                                <div class="text-white w-full text-[17px] mb-6 font-extrabold">Serie A 2023/24</div>
                            </div>
                            <img :src="randImg2" class="rounded-xl" >
                        </div>
                    </div>
                    <div class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-[14px] text-gray-400">Trend di Moda</div>
                                <div class="text-white w-full text-[17px] font-extrabold">Sneakers</div>
                                <div class="text-[14px] text-grey-400">5,786 Tweets</div>
                            </div>
                            <DotsHorizontal fillColor="#5e5c5c" />
                        </div>
                    </div>
                    <div class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-[14px] text-gray-400">Trend Politica</div>
                                <div class="text-white w-full text-[17px] font-extrabold">Meloni</div>
                                <div class="text-[14px] text-grey-400">27,823 Tweets</div>
                            </div>
                            <DotsHorizontal fillColor="#5e5c5c" />
                        </div>
                    </div>
                    <div class="hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                        <div class="flex p-3 justify-between">
                            <div>
                                <div class="text-[14px] text-gray-400">Trend Sport</div>
                                <div class="text-white w-full text-[17px] font-extrabold">Basket</div>
                                <div class="text-[14px] text-grey-400">6,983 Tweets</div>
                            </div>
                            <DotsHorizontal fillColor="#5e5c5c" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="OverlaySection" v-if="createTweet" class="fixed top-0 left-0 w-full h-screen bg-black mg:bg-gray-400 md:bg-opacity-30 md:p-3">
        <div class="md:max-w-2xl md:mx-auto md:mt-10 md:rounded-xl bg-black md:border">
            <div class="flex items-center justify-between md:inline-block p-2 m-2 rounded-full cursor-pointer">
                <div @click="closeMessageBox()" class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                    <Close fillColor="#FFFFFF" :size="28" class="md:block hidden"/>
                    <ArrowLeft fillColor="#FFFFFF" :size="28" class="md:hidden block"/>
                </div>
                <button 
                    :disabled="!tweet"
                    :class="tweet ? 'bg-[#1C9CEF] text-white' : 'bg-[#125D77] text-gray-400'"
                    class="md:hidden font-extrabold text-[16px] p-1.5 px-4 rounded-full cursor-pointer"
                >
                    Tweet
                </button>
            </div>
            <div class="w-full flex">
                <div class="ml-3.5 mr-2">
                    <img :src="randImg1" width="55" class="rounded-full">
                </div>
                <div class="w-[calc(100%-100px)]">
                    <div class="inline-block">
                        <div class="flex items-center border border-gray-700 rounded-full">
                            <span class="text-[#1C9CEF] p-0.5 pl-3.5 font-extrabold">Tutti</span>
                            <ChevronDown class="pr-2" fillColor="#1C9CEF" :size="25"/>
                        </div>
                    </div>
                    <div>
                        <textarea 
                            :oninput="textareaInput"
                            placeholder="Cosa sta succedendo?" 
                            cols="30" 
                            rows="4" 
                            v-model="tweet" 
                            ref="textarea"
                            class="
                                w-full
                                bg-black
                                border-0
                                mt-2
                                focus:ring-0
                                text-white
                                text-[19px]
                                font-extrabold
                                min-h-[120px]
                            "
                            ></textarea>
                    </div>
                    <div class="w-full">
                        <video src="showUpload" controls v-if="uploadType === 'mp4'"  class="rounded-xl overflow-auto"/>
                        <img v-else :src="showUpload" class="rounded-xl min-w-full"/>
                    </div>
                    <div class="flex py-2 items-center text-[#1C9CEF] font-extrabold">
                        <Earth class="pr-2" fillColor="#1C9CEF" :size="20"/> Tutti possono rispondere
                    </div>
                    <div class="border-b border-b-gray-700"></div>
                    <div class="flex items-center justify-between py-2">
                        <div class="flex items-center">
                            <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                <label for="fileUpload" class="cursor-pointer">
                                    <Imageoutline fillColor="#1C9CEF" :size="25"/>
                                </label>
                                <input type="file" id="fileUpload" class="hidden" @change="getFile">
                            </div>
                            <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                <FileGifBox fillColor="#1C9CEF" :size="25"/>
                            </div>
                            <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                <Emoticon fillColor="#1C9CEF" :size="25"/>
                            </div>
                        </div>
                        <button 
                            :disabled="!tweet"
                            :class="tweet ? 'bg-[#1C9CEF] text-white' : 'bg-[#125D77] text-gray-400'"
                            class="hidden md:block font-extrabold text-[16px] p-1.5 px-4 rounded-full cursor-pointer"
                        >
                            Tweet
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
 
<style>
    body {
        background-color: black;
    }

    .logo-x{
        height: 37px;
        width: 37px;
    }
</style>