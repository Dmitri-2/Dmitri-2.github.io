<template>
  <div class="min-h-full">
    <main id="main-section" class="h-full pb-10 sm:pb-24 pt-2 md:pt-28">
      <div class="flex-col max-w-7xl py-2 px-4 sm:px-6 lg:px-8">
        <h1 class="text-7xl font-semibold tracking-tight text-[#C67662] mt-10"
        style="font-family: 'Solitreo', cursive;">
          Hi, I'm Dmitri Murphy
        </h1>
        <h5 class="text-yellow-900 text-3xl mb-1">It's nice to meet you!</h5>
      </div>
      <div class="mx-1 md:mx-5 my-10 sm:my-24">
        <div class="flex justify-end">
          <div class="card sm:w-2/3 sm:my-12">
            <div class="font-semibold text-2xl mb-2 ml-2 text-center sm:text-left">About Me</div>
            <div class="flex-row md:flex space-x-3 tracking-wide">
              <img src="./assets/IMG_8373.jpg" class="rounded-lg mx-auto sm:m-2 max-w-[200px] sm:max-w-[400px] max-h-[200px] sm:max-h-[400px] h-auto"/>
              <div class="mt-5 sm:mt-0 text-lg"> I'm currently a software engineer at CDK Global. I graduated from Portland State University and the Urban Honors college,
                majoring in Computer Science, with a minor in Mathematics. My hope is to direct my career towards working on
                machine learning and artificial intelligence applications. I have previously played chess
                competitively and competed as a figure skater.
                <div class="mt-2">
                  <div class="font-semibold">Hobbies / Jobs</div>
                  <ul class="list-disc ml-8">
                    <li>Figure Skating</li>
                    <li>Figure Skating Coach</li>
                    <li>Chess (<a href="https://www.uschess.org/msa/MbrDtlMain.php?14249740"
                                  class="text-blue-600"
                                  target="_blank" rel="noreferrer">rated by the US Chess Federation </a> and FIDE)
                    </li>
                    <li>Skiing</li>
                    <li>Former leader of the Computer Action Team web development team</li>
                    <li>IT / Website manager for the Portland Ice Skating Club</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-row-reverse md:flex md:space-y-0 justify-between mt-10 sm:mt-32">
          <div class="card justify-center md:w-3/12 mt-10 sm:mt-64">
            <div class="overflow-scroll">
              <h3 class="text-xl font-semibold text-center"> Programming Languages + Skills </h3>
              <table class="table text-center mt-5 table-auto">
                <thead>
                <tr>
                  <th scope="col" class="pb-2"> Language/Skill</th>
                  <th scope="col" class="pb-2"> Proficiency</th>
                </tr>
                </thead>
                <tbody class="">
                <tr v-for="skill in skills" class="border-t-2 border-gray-500/75">
                  <td class="py-2 px-4 w-72"> {{ skill.name }} </td>
                  <td class="space-x-1 w-36 overflow-visible min-w-[100px]">
                    <i v-for="i in Array(skill.level)" class="fas fa-circle"></i>
                    <i v-for="i in Array(5-skill.level)" class="far fa-circle"></i>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card block h-fit md:w-9/12 mt-10 sm:mt-48">
            <h3 class="text-xl font-semibold text-center mb-3"> Projects I Worked On </h3>
            <div class="px-5 text-center">
              I have worked on a lot of different projects over the years. Including the ones below:
            </div>
            <div class="flex flex-col sm:flex-row">
<!--              <img src="./assets/RinkRec.png" class="rounded-lg border-4 max-w-xs mx-auto border-cyan-800 mb-8 sm:my-auto"/>-->
              <div class="p-4">
                <div class="flex-col sm:flex sm:flex-row mt-3 py-3 rounded bg-white p-3">
                  <div class="text-center mb-3 sm:mb-0 flex content-center">
                    <i class="fas fa-skating text-5xl m-auto bg-orange-200 p-2 rounded"></i>
                  </div>
                  <div class="mx-3">
                    <div class="text-xl mr-2 text-center sm:text-left">Rink Recreation</div>
                    <span>A service for ice rinks to manage their facilities
                        including classes, ice time, coaches and employees (still under development). </span>
                  </div>
                  <div class="flex justify-center">
                    <a href="https://mvia.rinkrec.com/" target="_blank" rel="noopener noreferrer" class="my-auto">
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Visit
                      </button>
                    </a>
                  </div>
                </div>
                <div class="flex-col sm:flex sm:flex-row mt-3 py-3 rounded bg-white p-3">
                  <div class="text-center mb-3 sm:mb-0 flex content-center">
                    <i class="far fa-comments text-4xl m-auto bg-orange-200 p-2 rounded"></i>
                  </div>
                  <div class="mx-3">
                    <div class="text-xl mr-2 text-center sm:text-left">CAT Support Chat</div>
                    <span>Among other services that I built or helped build during my
                      time at the Computer Action Team at Portland State University, the customer support chat
                    portal was one of the cooler projects. It is also one of the few that is accessible publicly,
                      not just to students or faculty. </span>
                  </div>
                  <div class="flex justify-center">
                    <a href="https://support.cat.pdx.edu/" target="_blank" rel="noopener noreferrer" class="my-auto">
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Visit
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-row-reverse mt-10 sm:mt-20">
          <div class="card block w-full sm:w-10/12">
            <h3 class="text-xl font-semibold text-center mb-3"> Highlights </h3>
            <div class="flex flex-col sm:flex-row space-x-5">
              <div class="rounded border-4 border-cyan-800 w-full sm:w-1/2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ult7O2-OwSQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="w-full sm:w-1/2 mt-8 sm:mt-0">
                As a competitive skater, I used to spend a lot of time training and competed at the Junior
                level (one step below the top skaters in the country – Senior). If you are curious, feel
                free to watch this program. It is from the 2019 qualifying season at a competition in Sherwood, Oregon.

                <div class="mt-8">
                  If you want to follow along, here is also the technical score-sheet from the competition:
                  <div class="mt-3">
                    <a href="https://ijs.usfigureskating.org/leaderboard/results/2019/27733/SEGM011.html" target="_blank" rel="noopener noreferrer">
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        View the Score Sheet
                      </button>
                    </a>
                  </div>


              </div>

              </div>
            </div>
          </div>
        </div>

      </div>


    </main>
    <footer class="bg-white w-full p-5 flex-row sm:flex justify-between space-y-2">
      <div class="font-semibold text-orange-900"> Made with VueJS and Tailwind CSS</div>
      <div class="font-semibold text-orange-900"> Background Photo: Eberhard Grossgasteiger (Unsplash)</div>
    </footer>
  </div>
</template>

<script setup lang="ts">
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon, UserIcon } from '@heroicons/vue/24/outline'


const skills = [
  { name: "Unix / Linux / Git", level: 5 },
  { name: "React / Vue / JS", level: 5 },
  { name: "AWS", level: 4 },
  { name: "SQL / NoSQL Databases", level: 4 },
  { name: "CSS / TailwindCSS", level: 4 },
  { name: "PHP / Laravel", level: 3 },
  { name: "Python", level: 3 },
]

const user = {
  name: 'Tom Cook',
  email: 'tom@example.com',
  imageUrl:
      'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
}
const navigation = [
  { name: 'Dashboard', href: '#', current: true }
]
const userNavigation = [
  { name: 'Your Profile', href: '#' },
  { name: 'Settings', href: '#' },
  { name: 'Sign out', href: '#' },
]
</script>

<style type="text/css" scoped>

#main-section {
  background: url("./assets/eberhard-grossgasteiger-GWoLvxxjSzs-unsplash.jpeg") #d5d5d5 no-repeat;
  background-size: cover;
}


@media(max-width: 1200px){
  #main-section {
    background: url("./assets/eberhard-grossgasteiger-GWoLvxxjSzs-unsplash.jpeg") #d5d5d5 no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
}

.card {
  @apply mx-4 sm:mx-5 sm:mx-10 bg-white/80 rounded-3xl p-3 sm:p-8;
}


</style>