<template>
  <div>
    <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
      <a href="#" @click.prevent class="navbar-brand">Laravel Instagram</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name:'home' }">Home</router-link>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" :to="{ name:'about' }">About</router-link>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>
