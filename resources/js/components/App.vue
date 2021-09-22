<template>
  <main>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <div class="container-fluid">
        <router-link to="/" class="navbar-brand" href="#">ICCT</router-link>

        <div class="collapse navbar-collapse">
          <ul id="w5" class="navbar-nav ml-auto nav">
            <router-link exact-active-class="active" to="/" class="nav-link"
              >PRINCIPAL</router-link
            >
            <li class="dropdown nav-item">
              <a
                class="dropdown-toggle nav-link"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false"
                >CADASTRO</a
              >
              <div id="w6" class="dropdown-menu">
                <router-link
                  exact-active-class="active"
                  to="/model"
                  class="dropdown-item"
                  >MODEL</router-link
                >

                <router-link
                  exact-active-class="active"
                  to="/dqc"
                  class="dropdown-item"
                  >DQC81</router-link
                >

                <router-link
                  exact-active-class="active"
                  to="/dqc841"
                  class="dropdown-item"
                  >DQC811</router-link
                >
              </div>
            </li>
            <li class="dropdown nav-item">
              <a
                class="dropdown-toggle nav-link"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false"
                >RELATORIO</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <router-view></router-view>
    </div>
    <br />
  </main>
</template>
 
<script>
export default {};
</script>