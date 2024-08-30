<template>
    <div>
        <div class="d-flex justify-content-between">
            <div class="col-md-3 mb-3">
                <input type="text" id="inputSearch" class="form-control" placeholder="Search..." v-model="params.search">
            </div>
            <div class="col-md-3 mb-3 d-flex justify-content-end">
                <button @click="addData" type="button" class="btn btn-success rounded-pill">Add Data</button>
            </div>
        </div>
        <vue3-datatable :rows="rows" :columns="cols" :loading="loading" :totalRows="total_rows" :isServerMode="false"
            :pageSize="params.pagesize" :search="params.search">

        <template #isActive="data">
            <i @click="editItem(data.value)" class="bi bi-pen-fill" style="color: #2ca55e; font-size: 20px;"></i>
            <i @click="deleteItem(data.value)" class="bi bi-trash-fill" style="color: #ffcc00; font-size: 20px; margin-left:16px"></i>
        </template>
        </vue3-datatable>
    </div>
</template>

<script setup lang="ts">
import { ref, reactive } from 'vue';
import Vue3Datatable from '@bhplugin/vue3-datatable';
import '@bhplugin/vue3-datatable/dist/style.css';

const loading = ref(false);
const total_rows = ref(1);

const params = reactive({
    current_page: 1,
    pagesize: 5,
    search: '',
    column_filters: [],
});

const rows = ref([
    { id: 1, firstName: 'John', lastName: 'Doe', email: 'john.doe@example.com', age: 30, dob: '1994-05-10', address: { city: 'New York' }, isActive: true },
    { id: 2, firstName: 'Jane', lastName: 'Smith', email: 'jane.smith@example.com', age: 25, dob: '1999-08-15', address: { city: 'Los Angeles' }, isActive: false },
    { id: 3, firstName: 'Emily', lastName: 'Johnson', email: 'emily.johnson@example.com', age: 35, dob: '1989-01-22', address: { city: 'Chicago' }, isActive: true },
    { id: 4, firstName: 'Michael', lastName: 'Williams', email: 'michael.williams@example.com', age: 40, dob: '1983-12-30', address: { city: 'Houston' }, isActive: false },
    { id: 5, firstName: 'Sarah', lastName: 'Brown', email: 'sarah.brown@example.com', age: 28, dob: '1996-07-05', address: { city: 'Philadelphia' }, isActive: true },
    { id: 6, firstName: 'David', lastName: 'Jones', email: 'david.jones@example.com', age: 33, dob: '1991-03-12', address: { city: 'San Antonio' }, isActive: true },
    { id: 7, firstName: 'Laura', lastName: 'Garcia', email: 'laura.garcia@example.com', age: 29, dob: '1995-11-09', address: { city: 'San Diego' }, isActive: false },
    { id: 8, firstName: 'James', lastName: 'Martinez', email: 'james.martinez@example.com', age: 42, dob: '1981-09-21', address: { city: 'Dallas' }, isActive: true },
    { id: 9, firstName: 'Olivia', lastName: 'Rodriguez', email: 'olivia.rodriguez@example.com', age: 31, dob: '1992-06-17', address: { city: 'San Jose' }, isActive: true },
    { id: 10, firstName: 'Daniel', lastName: 'Lee', email: 'daniel.lee@example.com', age: 27, dob: '1997-02-10', address: { city: 'Austin' }, isActive: false },
    { id: 11, firstName: 'Megan', lastName: 'Harris', email: 'megan.harris@example.com', age: 38, dob: '1986-10-04', address: { city: 'San Francisco' }, isActive: true },
    { id: 12, firstName: 'William', lastName: 'Clark', email: 'william.clark@example.com', age: 45, dob: '1978-05-18', address: { city: 'Columbus' }, isActive: true },
    { id: 13, firstName: 'Sophia', lastName: 'Lewis', email: 'sophia.lewis@example.com', age: 26, dob: '1997-12-12', address: { city: 'Indianapolis' }, isActive: false },
    { id: 14, firstName: 'Matthew', lastName: 'Walker', email: 'matthew.walker@example.com', age: 32, dob: '1991-04-20', address: { city: 'Fort Worth' }, isActive: true },
    { id: 15, firstName: 'Ava', lastName: 'Allen', email: 'ava.allen@example.com', age: 24, dob: '1999-09-30', address: { city: 'Charlotte' }, isActive: true },
    { id: 16, firstName: 'Joshua', lastName: 'Young', email: 'joshua.young@example.com', age: 29, dob: '1995-07-15', address: { city: 'Detroit' }, isActive: false },
    { id: 17, firstName: 'Isabella', lastName: 'King', email: 'isabella.king@example.com', age: 31, dob: '1992-03-05', address: { city: 'El Paso' }, isActive: true },
    { id: 18, firstName: 'Ethan', lastName: 'Wright', email: 'ethan.wright@example.com', age: 36, dob: '1987-11-23', address: { city: 'Memphis' }, isActive: true },
    { id: 19, firstName: 'Mia', lastName: 'Lopez', email: 'mia.lopez@example.com', age: 27, dob: '1996-02-14', address: { city: 'Baltimore' }, isActive: false },
    { id: 20, firstName: 'Lucas', lastName: 'Hill', email: 'lucas.hill@example.com', age: 34, dob: '1989-08-07', address: { city: 'Boston' }, isActive: true },
    { id: 21, firstName: 'Charlotte', lastName: 'Scott', email: 'charlotte.scott@example.com', age: 23, dob: '2000-01-29', address: { city: 'Seattle' }, isActive: false },
    { id: 22, firstName: 'Andrew', lastName: 'Green', email: 'andrew.green@example.com', age: 32, dob: '1992-10-25', address: { city: 'Denver' }, isActive: true },
    { id: 23, firstName: 'Amelia', lastName: 'Adams', email: 'amelia.adams@example.com', age: 28, dob: '1995-06-19', address: { city: 'Washington' }, isActive: true },
    { id: 24, firstName: 'Benjamin', lastName: 'Baker', email: 'benjamin.baker@example.com', age: 39, dob: '1984-09-11', address: { city: 'Nashville' }, isActive: false },
    { id: 25, firstName: 'Harper', lastName: 'Nelson', email: 'harper.nelson@example.com', age: 30, dob: '1993-04-22', address: { city: 'Omaha' }, isActive: true },
    { id: 26, firstName: 'Henry', lastName: 'Carter', email: 'henry.carter@example.com', age: 37, dob: '1987-11-03', address: { city: 'Las Vegas' }, isActive: true },
    { id: 27, firstName: 'Evelyn', lastName: 'Mitchell', email: 'evelyn.mitchell@example.com', age: 26, dob: '1997-12-21', address: { city: 'Kansas City' }, isActive: false },
    { id: 28, firstName: 'Jack', lastName: 'Perez', email: 'jack.perez@example.com', age: 31, dob: '1993-08-17', address: { city: 'Atlanta' }, isActive: true },
    { id: 29, firstName: 'Lily', lastName: 'Roberts', email: 'lily.roberts@example.com', age: 22, dob: '2002-04-06', address: { city: 'Colorado Springs' }, isActive: true },
    { id: 30, firstName: 'Samuel', lastName: 'Turner', email: 'samuel.turner@example.com', age: 34, dob: '1989-05-20', address: { city: 'St. Louis' }, isActive: false }
]);


const cols = ref([
    { field: 'id', title: 'ID', isUnique: true, type: 'number' },
    { field: 'firstName', title: 'First Name' },
    { field: 'lastName', title: 'Last Name' },
    { field: 'email', title: 'Email' },
    { field: 'age', title: 'Age', type: 'number' },
    { field: 'dob', title: 'Birthdate', type: 'date' },
    { field: 'address.city', title: 'City' },
    { field: 'isActive', title: 'Actions', type: 'bool' },
]);

const editItem = (data) =>{
    alert('Editing '+ data.firstName);
}
const deleteItem = (data) =>{
    alert('Deleting '+ data.firstName);
}

const addData = () =>{
    alert('adding Data');
}
</script>

