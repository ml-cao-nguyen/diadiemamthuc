import axios from "axios";
import qs from "qs";

const parse = qs.parse;
const serialize = (params: Object) => {
    return qs.stringify(params, { allowDots: true });
};

type Response = Object;

class Api {
    constructor () {
        this.configDefault = {
            url : null,
            method: "get" | "post" | "put" | "delete" | "GET" | "POST" | "PUT" | "DELETE",
            params: Object,
            headers:{
                content_type : null,
                token: null
            }
        }
    }

    request(config = this.configDefault) : Promise<Response>{
        const method = config.method.toUpperCase();
        const header = {
            "Content-Type" : "application/x-www-form-urlencoded"
        };
        if (config.headers.token) {
            header["Authorization"] = `token ${config.headers.token}`;
        }
        if (config.headers.content_type) {
            header['Content-Type'] = config.headers.content_type;
        }
        const extraConfig = {};
        if ("GET" === method) {
            extraConfig["params"] = config.params;
        } else if ("POST" === method || "PUT" === method) {
            extraConfig["data"] = serialize(config.params);
        } else if ("DELETE" === method) {
            extraConfig["data"] = config.params;
        }
        return axios({
            method: method,
            baseURL: "http://diadiemamthuc.tech/api",
            url: config.url,
            headers: header,
            ...extraConfig
        });
    }
}

const api = new Api();

export default api;
