<template>
    <v-app>
      <v-stepper v-model="e1">
        <v-stepper-header>
          <v-stepper-step :complete="e1 > 1" step="1">Tipo de persona</v-stepper-step>

          <v-divider></v-divider>

          <v-stepper-step :complete="e1 > 2" step="2">Datos</v-stepper-step>

          <v-divider></v-divider>

          <v-stepper-step step="3">Confirmar</v-stepper-step>
        </v-stepper-header>
        <form @submit.prevent="guardar">
         
        <v-stepper-items>
          <v-stepper-content step="1">
            
            <div class="row">
              <div class="col-md-6">
                <h4 class="text-center">
                Tipo de persona
                </h4>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select v-model="usuario.selected" class="form-control" id="select">
                    <option disabled value="">Seleccione ...</option>
                    <option>Natural</option>
                    <option>Jurídica</option>
                  </select>
                </div>
              </div>
            </div>

            <v-btn
              color="primary"
              @click="e1 = 2"
            >
              Continuar
            </v-btn>

          </v-stepper-content>

          <v-stepper-content step="2">
            <v-card
              class="mb-12"
            >

            <div v-if="selected === 'Jurídica'" class="form-group">
              <label for="enterprise">Nombre de empresa</label>
              <input v-model="usuario.enterprise" type="text" class="form-control" id="enterprise" aria-describedby="Empresa" placeholder="Nombre empresa">
            </div>
            <div class="form-group">
              <label for="phone">Teléfono contacto</label>
              <input v-model="usuario.phone" type="text" class="form-control" id="phone" aria-describedby="contactp" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <label for="impuesto">Impuesto anual</label>
              <select v-model="usuario.impuesto" class="form-control" id="impuesto">
                <option disabled value="">Seleccione ...</option>
                <option>0 - 50 MILL</option>
                <option>50 - 200 MILL</option>
                <option>Más de 200 MILL</option>
              </select>
            </div>
            <div class="form-group">
              <label for="country">País</label>
              <input v-model="usuario.country" type="text" class="form-control" id="country" aria-describedby="Pais" placeholder="País">
            </div>

            <div class="form-group">
              <label for="city">Ciudad</label>
              <input v-model="usuario.city" type="text" class="form-control" id="city" aria-describedby="Ciudad" placeholder="Ciudad">
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input v-model="usuairo.email" type="email" class="form-control" id="email" aria-describedby="Correo electrónico">
            </div>
            </v-card>

            <v-btn
              color="primary"
              @click="e1 = 3"
            >
              Continuar
            </v-btn>

            <v-btn @click="e1 = 1" text>Atrás</v-btn>
          </v-stepper-content>

          <v-stepper-content step="3">
           
            <div v-if="selected === 'Jurídica'" class="form-group">
              <label >Nombre de empresa</label>
              <p class="text-bold" style="font-size: 22px;">{{selected}}</p>
            </div>
            <div class="form-group">
              <label >Teléfono contacto</label>
              <p class="text-bold" style="font-size: 22px;">{{phone}}</p>
            </div>
            <div class="form-group">
              <label>Impuesto anual</label>
              <p class="text-bold" style="font-size: 22px;">{{impuesto}}</p>
            </div>
            <div class="form-group">
              <label>País</label>
              <p class="text-bold" style="font-size: 22px;">{{country}}</p>
            </div>

            <div class="form-group">
              <label>Teléfono contacto</label>
              <p class="text-bold" style="font-size: 22px;">{{phone}}</p>
            </div>
            <div class="form-group">
              <label>Correo electrónico</label>
              <p class="text-bold" style="font-size: 22px;">{{email}}</p>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

            <v-btn @click="e1 = 2" text>Cancelar</v-btn>
            
          </v-stepper-content>
        </v-stepper-items>
         </form>
      </v-stepper>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                e1: 1,
                
                usuario:{
                  selected: '',
                  impuesto: '',
                  phone: '',
                  country: '',
                  city: '',
                  email: '',
                  enterprise: '',
                }
            }
        },
        methods: {
          guardar(){
            const params = {
              names = this.usuario.names;
              email = this.usuario.email;
              phone = this.usuario.phone;
              type = this.usuario.type;
              tax = this.usuario.tax;
              name_enterprise = this.usuario.name_enterprise;
              country = this.usuario.country;
              city = this.usuario.city;
              document = this.usuario.document;
              message = this.usuario.message;
            }
            axios.post('/customers', params)
          }
        },
    }
</script>